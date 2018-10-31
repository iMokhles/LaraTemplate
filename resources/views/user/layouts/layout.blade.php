<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Site-Head --}}
    @include('user.layouts.inc.head')
</head>

<body class="with-side-menu control-panel control-panel-compact">

{{-- Navigation Bar --}}

@include('user.layouts.main_header.main_header')

<div class="mobile-menu-left-overlay"></div>

{{-- SideMenu --}}
@include('user.layouts.sidemenu.list')

<div class="page-content">
    <div class="container-fluid">

        {{-- BreadCrumb--}}
        @include('user.layouts.inc.breadcrumb')

        @yield('content')
        @stack('content')
    </div>
</div>

@include('user.layouts.inc.scripts')

</body>

</html>