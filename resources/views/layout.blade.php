<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap 3 Admin</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	</head>
	<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sistemas de Encuestas</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#">My Profile</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="glyphicon glyphicon-lock"></i>Salir</a></li>
            </ul>
        </div>
    </div>

    <!-- /container -->
</div>
<!-- /Header -->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

            <hr>

            <ul class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Settings <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav navbar-nav navbar-right">


                    <?php  
                        $user = Auth::user();
                        if ($rol) {
                    ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i>
                         Roles 
                        <span class="caret"></span>
                        </a>
                        <ul id="g-account-menu" class="dropdown-menu" role="menu">
                            <?php 
                               if ($rol.->sistema) {
                                   echo '<li><a href="##">Sistema</a></li>';
                               }
                               if ($rol->administrador) {
                                   echo '<li><a href="##">Admministrador</a></li>';
                               }
                               if ($rol->encuestador) {
                                   echo '<li><a href="##">Encuesador</a></li>';
                               }
                               if ($rol->controlador) {
                                   echo '<li><a href="##">Controlador</a></li>';
                               }
                            ?>
                        </ul>
                       
                    </li>
                    <?php 
                        }
                    ?>                               

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>




                </li>
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2"> Reports <i class="glyphicon glyphicon-chevron-right"></i></a>

                    <ul class="nav nav-stacked collapse" id="menu2">
                        <li><a href="#">Information &amp; Stats</a>
                        </li>
                        <li><a href="#">Views</a>
                        </li>
                        <li><a href="#">Requests</a>
                        </li>
                        <li><a href="#">Timetable</a>
                        </li>
                        <li><a href="#">Alerts</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#menu3"> Social Media <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu3">
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
                    </ul>
                </li>
            </ul>

            <hr>

            <a href="#"><strong><i class="glyphicon glyphicon-link"></i> Resources</strong></a>

            <hr>

            <ul class="nav nav-pills nav-stacked">
                <li class="nav-header"></li>
                <li><a href="#"><i class="glyphicon glyphicon-list"></i> Layouts &amp; Templates</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Toolbox</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-link"></i> Widgets</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-book"></i> Pages</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-star"></i> Social Media</a></li>
            </ul>

            <hr>
            <ul class="nav nav-stacked">
                <li class="active"><a href="http://bootply.com" title="The Bootstrap Playground" target="ext">Playground</a></li>
                <li><a href="/tagged/bootstrap-3">Bootstrap 3</a></li>
                <li><a href="/61518" title="Bootstrap 3 Panel">Panels</a></li>
                <li><a href="/61521" title="Bootstrap 3 Icons">Glyphicons</a></li>
                <li><a href="/62603">Layout</a></li>
            </ul>

            <hr>

            <a href="#"><strong><i class="glyphicon glyphicon-list"></i> More Templates</strong></a>

            <hr>

            <ul class="nav nav-stacked">
                <li class="active"><a rel="nofollow" href="http://goo.gl/pQoXEh" target="ext">Premium Themes</a></li>
                <li><a rel="nofollow" href="https://wrapbootstrap.com/?ref=bootply">Wrap Bootstrap</a></li>
                <li><a rel="nofollow" href="http://bootstrapzero.com">BootstrapZero</a></li>
            </ul>
        </div>
        <!-- /col-3 -->
        
        <!--/col-span-9-->
    </div>
</div>
<!-- /.modal -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>