<div class="text-center">
    <div class="profile-card">
        <div class="profile-card-photo">
            <img src="{{ asset('start_ui') }}/img/avatar-2-64.png" alt=""/>
        </div>
        <div class="profile-card-name">{{auth('user')->user()->name}}</div>
        <div class="profile-card-status">{{auth('user')->user()->email}}</div>
    </div><!--.profile-card-->
</div>

