@yield('before_scripts')
@stack('before_scripts')

<script src="{{ asset('start_ui') }}/js/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="{{ asset('start_ui') }}/js/lib/popper/popper.min.js"></script>
<script src="{{ asset('start_ui') }}/js/lib/tether/tether.min.js"></script>
<script src="{{ asset('start_ui') }}/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="{{ asset('start_ui') }}/js/plugins.js"></script>

<script type="text/javascript" src="{{ asset('start_ui') }}/js/lib/match-height/jquery.matchHeight.min.js"></script>

<script src="{{ asset('start_ui') }}/js/app.js"></script>

@include('admin.layouts.inc.alerts')

@yield('after_scripts')
@stack('after_scripts')