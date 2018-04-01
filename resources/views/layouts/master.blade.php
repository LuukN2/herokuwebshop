<html>
<head>
    <title>Bordspellen en Puzzels</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="body">
@section('sidebar')
    <nav class="navbar navbar-default  navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Bordspellen en Puzzels</a>
                @foreach($navigations as $navigation)
                    <a class="navbar-brand" href="{{'http://'.Request::getHttpHost().'/'.$navigation->url}}">{{$navigation->name}}</a>
                @endforeach
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if(!Auth::user())
                        <li><a href="login">Login</a></li>
                        <li><a href="register">Signup</a></li>
                        <li><a href="/cart">Cart <span class="fa fa-shopping-cart"></span></a></li>
                    @else
                        <li><a href="/orders">My Orders <span class="fa fa-briefcase"></span></a></li>
                        <li><a href="/cart">Cart <span class="fa fa-shopping-cart"></span></a></li>
                        <li><a href="logout">Logout {{ Auth::user()->name}}</a></li>
                    @if(Auth::user()->admin == 1)
                        <li><a href="/admin">Adminpagina</a></li>
                    @endif
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
@show
 
<div class="container content">
    @yield('content')
</div>
</body>
</html>
 
 