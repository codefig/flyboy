<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::to('css/bootstrap.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ URL::to('css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::to('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
   <link href="{{URL::to("css/font-awesome.css")}}"  rel="stylesheet" type="text/css">

    {{-- <link href="{{URL::to("css/font-awesome.css")}}"  rel="stylesheet" type="text/css"> --}}
    <link href="{{URL::to("css/responsive.css")}}"  rel="stylesheet" type="text/css">
    <link href="{{URL::to("css/animate.css")}}"  rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>

                    <div class="logo-container">
                        <center><img src="{{ URL::to('img/flyboy_home_logo.png') }}" class='img-responsive' alt="Logo" style="height:100px;width:100px;"></center>
                    </div>

                    <form method="post" action="{{ route('admin.login.post') }}">

                        <div class="panel-body">

                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Token" name="security_key" type="password">
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        <input type="submit" class="btn btn-default" name="submitBtn" id="submitBtn" style="width:100%;"/>
                                    </div>
                                </fieldset>

                                <div class="alert alert-danger">
                                    @if(count($errors) > 0)
                                        @foreach($errors->all() as $error)
                                            <li>{{  $error }}</li>
                                        @endforeach
                                    @endif
                                </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
     <!-- jQuery -->
    <script src="{{ URL::to('js/jquery.1.8.3.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::to('js/bootstrap.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ URL::to('js/metisMenu.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::to('js/sb-admin-2.js') }}"></script>

</body>

</html>
