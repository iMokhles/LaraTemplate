@php
    $userNotifiactions = auth('admin')->user()->unreadNotifications()->limit(5)->get();
    $userLogged = auth('admin')->user();
@endphp

<header class="site-header">
    <div class="container-fluid">
        <a href="#" class="site-logo">
            <img class="hidden-md-down" src="{{ asset('start_ui') }}/img/logo-2.png" alt="">
            <img class="hidden-lg-down" src="{{ asset('start_ui') }}/img/logo-2-mob.png" alt="">
        </a>

        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
            <span>toggle menu</span>
        </button>

        <button class="hamburger hamburger--htla">
            <span>toggle menu</span>
        </button>

        <div class="site-header-content">
            <div class="site-header-content-in">
                <div class="site-header-shown">

                    {{-- Right Content --}}

                    {{-- Notifications --}}

                    @include('admin.layouts.main_header.notifications')

                    {{-- Languages --}}

                    @include('admin.layouts.main_header.languages')

                    {{-- User --}}

                    @include('admin.layouts.main_header.user')

                </div>

            </div>
        </div>

    </div>
</header>