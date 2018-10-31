<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Site-Head --}}
    @include('admin.layouts.inc.head')
</head>

<body class="with-side-menu control-panel control-panel-compact">

{{-- Navigation Bar --}}

@include('admin.layouts.main_header.main_header')

<div class="mobile-menu-left-overlay"></div>

{{-- SideMenu --}}
@include('admin.layouts.sidemenu.list')

<div class="page-content">
    <div class="container-fluid">

        {{-- BreadCrumb--}}
        @include('admin.layouts.inc.breadcrumb')

        @yield('content')
        @stack('content')
    </div>
</div>

@include('admin.layouts.inc.scripts')

</body>

</html>