@extends('admin.layouts.layout_guest')

@section('before_styles')
    <link rel="stylesheet" href="{{ asset('start_ui') }}/css/separate/pages/login.min.css">
@endsection

@section('content')
    <form class="sign-box" method="POST" action="{{ route('admin.password.email') }}">

        @csrf

        <div class="sign-avatar">
            <img src="{{ asset('start_ui') }}/img/avatar-sign.png" alt="">
        </div>

        <div class="text-center">
            <p>@lang('admin_dashboard.reset_instruction')</p>
        </div>

        <div class="form-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="@lang('admin_dashboard.email_plh')"/>
        </div>

        <button type="submit" class="btn btn-rounded">@lang('admin_dashboard.send_verification_mail')</button>
        <p class="sign-note">Already have an account? <a href="{{ route('admin.login') }}">@lang('admin_dashboard.sign_in')</a></p>
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