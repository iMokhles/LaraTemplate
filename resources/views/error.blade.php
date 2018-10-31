{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: imokhles--}}
 {{--* Date: 31/10/2018--}}
 {{--* Time: 13:19--}}
 {{--*/--}}
        <!DOCTYPE html>
<html>
<head lang="{{ app()->getLocale() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Error {{$error_code}}</title>

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
    <link rel="stylesheet" href="{{ asset('start_ui') }}/css/separate/pages/error.min.css">
    <link rel="stylesheet" href="{{ asset('start_ui') }}/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('start_ui') }}/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('start_ui') }}/css/main.css">
</head>
<body>

<div class="page-error-box">
    <div class="error-code">{{$error_code}}</div>
    <p>{{$error_message}}</p>
    <a href="{{url('')}}" class="btn btn-rounded">Main page</a>
</div>
</body>
</html>