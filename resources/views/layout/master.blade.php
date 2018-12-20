<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="jkjun" content="诺斯凯其官网">
        <title>Home</title>

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/rs-plugin/rs-plugin/css/settings.css')}}" media="screen" />

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('css/bootstrap-3.1.1.min.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        {{--<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">--}}
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/ionicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/main.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- COLORS -->
        <link rel="stylesheet" id="color" href="{{asset('css/default.css')}}">

        <!-- JavaScripts -->
        <script src="{{asset('js/modernizr.js')}}"></script>

        <!--<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,100' rel='stylesheet' type='text/css'>--->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    @section('custom-style')
    @show
</head>
<body>
<!-- Wrap -->
<div id="wrap">
@section('header-tab')
    @show
@section('header-nav')
    @show
@section('content')
    @show
@section('footer')
    @show
</div>
</body>
</html>
<!-- JavaScripts -->
<script src="{{asset('js/jquery.min.js')}}"></script>
{{--<script src="{{asset('css/jquery.min.js')}}"></script>--}}
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/own-menu.js')}}"></script>
<script src="{{asset('js/jquery.lighter.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/color-switcher.js')}}"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="{{asset('plugins/rs-plugin/rs-plugin/js/jquery.tp.t.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/rs-plugin/rs-plugin/js/jquery.tp.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script type="text/javascript">
    $(".index-messages").submit(function (event) {
        event.preventDefault();
        var email = $('input[name=index_email]').val();
        if(email == ''){
            return;
        }
        var formData = new FormData();
        formData.append("email", email);
        formData.append("phone", "");
        formData.append("name", "主页用户");
        formData.append("message", "我有合作意向，请尽快与我联系");

        $.ajax({
            url: "/message/add",
            type: "post",
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: function (data) {
                $("#addRegionModal").modal('toggle');
                var result = JSON.parse(data);
                if(result.status = 200)
                    alert(result.msg);
                else
                    alert('留言失败')
            }
        })
    });
</script>
@section('custom-script')

    @show
