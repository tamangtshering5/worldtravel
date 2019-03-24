<!doctype html>
<html lang="en">
<head>
    <!-- SITE TITLE -->
    @foreach($seo as $data)
        <title>{{$data->title}} </title>
        <meta name="description" content="{{$data->description}}" />
        <meta name="keywords" content="{{$data->keywords}}" />
        <meta name="author" content="{{$data->author}}" />
    @endforeach
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{URL::to('frontend/images/favicon.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{URL::to('frontend/css/bootstrap.min.css')}}">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{URL::to('frontend/css/font-awesome.min.css')}}">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="{{URL::to('frontend/css/style.css')}}">
    <link rel="stylesheet" id="cpswitch" href="{{URL::to('frontend/css/orange.css')}}">
    <link rel="stylesheet" href="{{URL::to('frontend/css/responsive.css')}}">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="{{URL::to('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::to('frontend/css/owl.theme.css')}}">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="{{URL::to('frontend/css/flexslider.css')}}" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="{{URL::to('frontend/css/datepicker.css')}}">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="{{URL::to('frontend/css/magnific-popup.css')}}">

    <!-- Color Panel -->
    <link rel="stylesheet" href="{{URL::to('frontend/css/jquery.colorpanel.css')}}">
    <link rel="stylesheet" href="{{URL::to('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{URL::to('frontend/css/slick-theme.css')}}">
    <!--Jquery UI Stylesheet-->
    <link rel="stylesheet" href="{{URL::to('frontend/css/jquery-ui.min.css')}}">
</head>
<body id="main-homepage">