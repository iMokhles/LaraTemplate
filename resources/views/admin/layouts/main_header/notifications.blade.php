<div class="dropdown dropdown-notification notif">
    <a href="#"
       class="header-alarm dropdown-toggle no-arr @if(count($userNotifiactions) > 0) active @endif"
       id="dd-notification"
       data-toggle="dropdown"
       aria-haspopup="true"
       aria-expanded="false">
        <i class="font-icon-alarm"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
        <div class="dropdown-menu-notif-header">
            @lang('admin_dashboard.notifications')
            <span class="label label-pill label-danger">{{count($userNotifiactions)}}</span>
        </div>
        <div class="dropdown-menu-notif-list">
            @foreach ($userNotifiactions as $notification)
                <div class="dropdown-menu-notif-item">
                    <div class="photo">
                        <i class="{{$notification['data']['icon_class']}}" style="font-size: 25px;"></i>
                    </div>
                    <div class="dot"></div>
                    {{$notification['data']['message']}}
                    <div class="color-blue-grey-lighter">{{$notification['data']['time_ago']}}</div>
                </div>
            @endforeach

        </div>
        <div class="dropdown-menu-notif-more">
            <a href="#">@lang('admin_dashboard.see_more')</a>
        </div>
    </div>
</div>