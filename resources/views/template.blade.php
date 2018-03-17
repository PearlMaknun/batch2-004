<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
		<script type="text/javascript" href="{{ url('js/jquery-3.3.1.min')}}"></script>
		<script type="text/javascript" href="{{ url('js/popper.min.js')}}"></script>
		<script type="text/javascript" href="{{ url('js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" href="{{ url('js/fontawesome-all.min.js')}}"></script>
		<style>
			.navbar-link{
				color:green;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Lu'lu' Al-Maknun</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="#">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Profile</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Gallery</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">News</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">About Us</a>
		      </li>
		     </ul>
		  </div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					@yield('content')
				</div>
			</div>
		</div>

	</body>
</html>