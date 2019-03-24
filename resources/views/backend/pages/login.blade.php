{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->

    <link href="{{URL::to('backend/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{URL::to('backend/fonts/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('backend/css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{URL::to('backend/css/custom.css')}}" rel="stylesheet">
    <link href="{{URL::to('backend/css/icheck/flat/green.css')}}" rel="stylesheet">


    <script src="{{URL::to('backend/js/jquery.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background:#F7F7F7;">


<div id="wrapper">
    <div id="login" class="animate form">
        <section class="login_content">
            <form method="post" action="{{route('login_action')}}" >
                @if(count($errors)>0)
                    @foreach($errors->all() as $error )
                        <p class=" alert-success">{{$error}}</p>

                    @endforeach
                @endif

                @if(session('success'))
                    <p class="alert alert-success">{{session('success')}}</p>

                @endif
                {{csrf_field()}}
                <h1>Login Form</h1>
                <div>
                    <input type="email" class="form-control" placeholder="Email" required name="email" />
                </div>
                <div>
                    <input type="password" class="form-control" placeholder="Password" required name="password" />
                </div>
                <div>
                    <button type="submit" class="btn btn-default submit" style="background: #F1931B;">login</button>
                </div>
                <div class="clearfix"></div>
                <div class="separator">

                    <div class="clearfix"></div>
                    <br />
                    <div>
                        <h1> Ratomatki Cafe!</h1>

                        <p>©2018 All Rights Reserved. Ratomatki Cafe!. Privacy and Terms</p>
                    </div>
                </div>
            </form>
            <!-- form -->
        </section>
        <!-- content -->
    </div>
</div>


</body>

</html>
--}}

{{--///////////////////////////////////////////////////////////--}}

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>World Travel</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Exact login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
   {{-- <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>--}}
    <!-- //Meta-Tags -->

    <!-- Custom Theme files -->
    <link href="{{URL::to('backend/css/login.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{URL::to('backend/fonts/css/font-awesome.css')}}" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom Theme files -->

    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //web font -->
    <script src="{{URL::to('backend/js/jquery.min.js')}}"></script>
</head>
<body>
<!-- main -->
<div class="main">
    <h1>Exact Login Form</h1>
    <div class="main-w3lsrow">
        <!-- login form -->
        <div class="login-form login-form-left">
            <div class="agile-row">
                <div class="head">
                    <h2>Login to admin panel!</h2>
                    <span class="fa fa-lock"></span>
                </div>
                <div class="clear"></div>
                <div class="login-agileits-top">
                    <form action="{{route('login_action')}}" method="post">
                        @if(count($errors)>0)
                            @foreach($errors->all() as $error )
                                <p class=" alert-success">{{$error}}</p>

                            @endforeach
                        @endif

                        @if(session('success'))
                            <p class="alert alert-success">{{session('success')}}</p>

                        @endif
                        {{csrf_field()}}
                        {{--<input type="text" class="name" name="email" Placeholder="Email" required=""/>
                        <input type="password" class="password" name="Password" Placeholder="Password" required=""/>
                        <input type="submit" value="Login Now">--}}

                            <div>
                                <input type="text" class="" placeholder="Email" required name="email" />
                            </div>
                            <div>
                                <input type="password" class="" placeholder="Password" required name="password" />
                            </div>
                            <div>
                                <input type="submit" value="Login Now">
                            </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- //login form -->

    <!-- copyright -->
    <div class="copyright">
        <p> © 2018 Word Travel. All rights reserved |Design by <a href="http://w3layouts.com/" target="_blank">Grafias Technology</a></p>
    </div>
    <!-- //copyright -->
</div>
<!-- //main -->

</body>
</html>
