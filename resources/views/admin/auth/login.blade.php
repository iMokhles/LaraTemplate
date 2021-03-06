@extends('admin.layouts.layout_guest')

@section('before_styles')
    <link rel="stylesheet" href="{{ asset('start_ui') }}/css/separate/pages/login.min.css">
@endsection

@section('content')
    <form class="sign-box" method="POST" action="{{ route('admin.login') }}">

        @csrf

        <div class="sign-avatar">
            <img src="{{ asset('start_ui') }}/img/avatar-sign.png" alt="">
        </div>
        <header class="sign-title">@lang('admin_dashboard.sign_in')</header>
        <div class="form-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="@lang('admin_dashboard.email_plh')"/>
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="@lang('admin_dashboard.password_plh')"/>
        </div>
        <div class="form-group">
            <div class="checkbox float-left">
                <input type="checkbox" id="remember" name="remember"/>
                <label for="remember">@lang('admin_dashboard.remember_me')</label>
            </div>
            <div class="float-right reset">
                <a href="{{ route('admin.password.reset') }}">@lang('admin_dashboard.forgot_password_btn')</a>
            </div>
        </div>
        <button type="submit" class="btn btn-rounded">@lang('admin_dashboard.sign_in')</button>
        <p class="sign-note">@lang('admin_dashboard.dont_have_account') <a href="{{ route('admin.register') }}">@lang('admin_dashboard.sign_up')</a></p>
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