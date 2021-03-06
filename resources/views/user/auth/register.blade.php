@extends('user.layouts.layout_guest')

@section('before_styles')
    <link rel="stylesheet" href="{{ asset('start_ui') }}/css/separate/pages/login.min.css">
@endsection

@section('content')
    <form class="sign-box" method="POST" action="{{ route('user.register') }}">

        @csrf

        <div class="sign-avatar no-photo">&plus;</div>
        <header class="sign-title">@lang('user_dashboard.sign_up')</header>
        <div class="form-group">
            <input type="text" id="name" name="name" class="form-control" placeholder="@lang('user_dashboard.name_plh')"/>
        </div>
        <div class="form-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="@lang('user_dashboard.email_plh')"/>
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="@lang('user_dashboard.password_plh')"/>
        </div>
        <div class="form-group">
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="@lang('user_dashboard.passwordConfirmation_plh')"/>
        </div>

        <button type="submit" class="btn btn-rounded btn-success sign-up">@lang('user_dashboard.sign_up')</button>
        <p class="sign-note">@lang('user_dashboard.have_account') <a href="{{ route('user.login') }}">@lang('user_dashboard.sign_in')</a></p>
    </form>
@endsection

@section('after_scripts')
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
@endsection