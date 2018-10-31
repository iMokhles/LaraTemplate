<?php

namespace App\Notifications\User;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserVerifyEmailNotification extends Notification
{
    /**
     * The callback that should be used to build the mail message.
     *
     * @var \Closure|null
     */
    public static $toMailCallback;

    /**
     * @var User
     */
    private $user;

    /**
     * AdminVerifyEmailNotification constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;

    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    private function mailInfo($notifiable) {
        return [
            'mail_header' => 'Verify Email Address',
            'mail_message' => 'Please click the button below to verify your email address.',
            'email_address' => $this->user->email,
            'user_name' => $this->user->name,
            'button_text' => 'Verify Now!',
            'button_link' => $this->verificationUrl($notifiable),
            'additional_info' => 'If you did not create an account, no further action is required.',
            // TODO: setup the remover link
            'remove_email_link' => ''
        ];
    }
    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }

        return (new MailMessage)->view(
            'mail.single_button_mail', $this->mailInfo($notifiable)
        )->subject('['.config('app.name').']'.' Mail Verification');
    }

    /**
     * Get the verification URL for the given notifiable.
     *
     * @param  mixed  $notifiable
     * @return string
     */
    protected function verificationUrl($notifiable)
    {
        return URL::temporarySignedRoute(
            'user.verification.verify', Carbon::now()->addMinutes(60), ['id' => $notifiable->getKey()]
        );
    }

    /**
     * Set a callback that should be used when building the notification mail message.
     *
     * @param  \Closure  $callback
     * @return void
     */
    public static function toMailUsing($callback)
    {
        static::$toMailCallback = $callback;
    }
}
