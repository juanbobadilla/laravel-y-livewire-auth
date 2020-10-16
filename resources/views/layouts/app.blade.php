<div>
	<!doctype html>
	<html lang="en">
	  <head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	    <livewire:styles>
	   
		<livewire:scripts/>
	    <!-- trae a turbolink en true -->
	    <script src="{{ asset('js/app.js') }}"></script>

	    <title>Hello, world!</title>
	  </head>
	  <body>

		<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
		  <a class="navbar-brand" href="/">Home</a>

		 
			
			<!-- lo que se puede ver cuando esta autenticad -->
			@auth
			<ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <livewire:logout>
		      </li>
		    </ul>
			@endauth
			
			<!-- lo que se puede ver cuando no esta autenticado o eres un invitado -->
			@guest
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="/login">Login</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="/register">register</a>
		      </li>
		    </ul>
			@endguest

		</nav>

		<nav class="my-5 my-lg-5 my-md-5 my-sm-5 my-xl-5 container pt-5">
			@yield('content')
		</nav>
	  	

 
	    <!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	  </body>
	</html>
</div>

