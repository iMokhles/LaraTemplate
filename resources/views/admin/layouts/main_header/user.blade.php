<div class="dropdown user-menu">
    <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="{{ asset('start_ui') }}/img/avatar-2-64.png" alt="">
    </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
        <a class="dropdown-item" href="{{route('admin.account.info')}}"><span class="font-icon glyphicon glyphicon-user"></span>@lang('admin_dashboard.profile')</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{route('admin.logout')}}"><span class="font-icon glyphicon glyphicon-log-out"></span>@lang('admin_dashboard.logout')</a>
    </div>
</div>