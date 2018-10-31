<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Site-Head --}}
    @include('admin.layouts.inc.head')
</head>

<body>

<div class="page-center">
    <div class="page-center-in">
        <div class="container-fluid">

            @yield('content')
            @stack('content')

        </div>
    </div>
</div>

@include('admin.layouts.inc.scripts')

</body>

</html>