<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/default.css') }}" rel="stylesheet">
        

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

    <div class="container" style="padding-top: 10px; padding-bottom: 20px;">
    <img src="https://suitecrm.com/images/suite_icon.png" class="pull-left">
    <a href="{{ url('/auth/logout') }}" title="Log out" class="pull-right"><i class="fa fa-sign-out fa-2x"></i></a>
</div>
 <div class="page-container">
  
	<!-- top navbar -->
    <div class="navbar navbar-default" role="navigation">
       <div class="container">
    	<div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
            <a class="navbar-brand" href="#">Advanced Open Portal <small>Laravel fork</small></a>
    	</div>
       </div>
    </div>
      
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
<div class="col-xs-6 col-sm-3" id="sidebar" role="navigation">
                  
        <div class='block block-size-normal highlight-color-red'>
<div class='block-content-outer'>
<div class='block-content-inner'>
        <!-- sidebar -->
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Cases</a></li>
              <li><a href="#">Contracts</a></li>
              <li><a href="#">Invoices</a></li>              
            </ul>
        </div>
</div>
</div>
        </div>
    
        <!-- main area -->
        <div class="col-xs-12 col-sm-9">
             @yield('content')
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


      </div><!--/row-->



      <footer>
          <p class="text-center">&copy; Hermans Glenn</p>
      </footer>

    </div><!--/.container-->
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
