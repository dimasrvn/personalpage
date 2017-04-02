<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">

    <link rel="icon" href="{{ asset('favicon.ico') }}">
	  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	  <link rel="stylesheet" href="{{ asset('css/material-kit.css') }}"/>
	  <link rel="stylesheet" href="{{ asset('css/demo.css') }}"/>
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body class="index-page">
      <nav class="navbar navbar-info navbar-fixed-top navbar-color-on-scroll">
      	<div class="container">
            <div class="navbar-header">
      	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
      	        	<span class="sr-only">Toggle navigation</span>
      	        	<span class="icon-bar"></span>
      	        	<span class="icon-bar"></span>
      	        	<span class="icon-bar"></span>
      	    	</button>
      	    	<a href="">
      	        	<div class="logo-container">
    	                <div class="logo">
    	                    <img src="{{ asset('img/logo.png')}}" alt="Creative Tim Logo" class="img-circle" width="60" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">
    	                </div>
    	                <div class="brand">
    	                    <b>Dimas</b> dimasprasetya35@gmail.com
    	                </div>
      				    </div>
      	      </a>
      	    </div>

      	    <div class="collapse navbar-collapse" id="navigation-index">
      	    	<ul class="nav navbar-nav navbar-right">
      				<li class="active">
      					<a href="/">
      						<i class="material-icons">dashboard</i> Home
      					</a>
      				</li>
      				<li>
      					<a href="/blog">
      						<i class="material-icons">unarchive</i> Blog
      					</a>
      				</li>
              <li>
      					<a href="/design">
      						<i class="material-icons">color_lens</i> Order Design
      					</a>
      				</li>
              <li>
      					<a href="/about">
      						<i class="material-icons">account_circle</i> About Me
      					</a>
      				</li>
              <li>
      					<a rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/dimassdwp" target="_blank" class="btn btn-white btn-simple btn-just-icon">
      						<i class="fa fa-instagram"></i>
      					</a>
      				</li>
              <li>
      					<a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/Geo.Raven" target="_blank" class="btn btn-white btn-simple btn-just-icon">
      						<i class="fa fa-facebook-square"></i>
      					</a>
      				</li>
      				<li>
      					<a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/dimasrvn" target="_blank" class="btn btn-white btn-simple btn-just-icon">
      						<i class="fa fa-twitter"></i>
      					</a>
      				</li>
      	    	</ul>
      	    </div>
      	</div>
      </nav>
    @yield('content')

    <br>
    <footer class="footer">
	    <div class="container">
	        <nav class="pull-left">
	            <ul>
					<li class="active">
						<a href="/">
							Home
						</a>
					</li>
					<li>
						<a href="/blog">
						   Blog
						</a>
					</li>
					<li>
						<a href="/design">
						   Design
						</a>
					</li>
					<li>
						<a href="/about">
							About Me
						</a>
					</li>
	            </ul>
	        </nav>
	        <div class="copyright pull-right">
	            &copy; 2017, made by Creative Tim for a better web.
	        </div>
	    </div>
	</footer>
  </body>
	<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/material.min.js') }}" ></script>
	<script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/material-kit.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>
