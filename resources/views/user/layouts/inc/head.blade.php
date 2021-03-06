<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ isset($page_title) ? $page_title.' :: '.config('user_config.project_name').' Dashboard' : config('user_config.project_name').' Dashboard' }}</title>
<meta content="{{ isset($page_description) ? $page_description : config('user_config.project_description') }}" name="description" />
<meta content="{{ isset($page_author) ? $page_author : config('user_config.project_author') }}" name="author" />


<link href="{{ asset('start_ui') }}/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
<link href="{{ asset('start_ui') }}/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
<link href="{{ asset('start_ui') }}/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
<link href="{{ asset('start_ui') }}/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
<link href="{{ asset('start_ui') }}/img/favicon.png" rel="icon" type="image/png">
<link href="{{ asset('start_ui') }}/img/favicon.ico" rel="shortcut icon">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

@yield('before_styles')
@stack('before_styles')

<link rel="stylesheet" href="{{ asset('start_ui') }}/css/separate/vendor/pnotify.min.css">
<link rel="stylesheet" href="{{ asset('start_ui') }}/css/lib/font-awesome/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('start_ui') }}/css/lib/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('start_ui') }}/css/main.css">

@yield('after_styles')
@stack('after_styles')