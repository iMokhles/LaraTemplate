@extends('admin.layouts.layout_guest')

@section('before_styles')
    <link rel="stylesheet" href="{{ asset('start_ui') }}/css/separate/pages/login.min.css">
@endsection

@section('content')
    <form class="sign-box" method="POST" action="{{ route('admin.password.reset') }}">

        @csrf

        <div class="sign-avatar">
            <img src="{{ asset('start_ui') }}/img/avatar-sign.png" alt="">
        </div>

        <div class="text-center">
            <p>@lang('admin_dashboard.reset_password_instruction')</p>
        </div>

        <div class="form-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="@lang('admin_dashboard.email_plh')"/>
        </div>

        <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="@lang('admin_dashboard.new_password_plh')"/>
        </div>

        <div class="form-group">
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="@lang('admin_dashboard.new_passwordConfirmation_plh')"/>
        </div>

        <button type="submit" class="btn btn-rounded">@lang('admin_dashboard.reset_password')</button>
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