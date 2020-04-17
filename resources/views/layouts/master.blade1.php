<!DOCTYPE html>
<html>
<head>
	<title>CatetanQ | Data Siswa</title>

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My Fonts -->
    <link href="fonts/Channel.ttf" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <a class="navbar-brand" href="#"><b>Data Siswa</b></a>
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      
	    </ul>
	    <form class="form-inline my-2 my-lg-0" method="GET" action="/siswa">
	      <input name="cari" class="form-control mr-sm-2" type="text" placeholder="Cari Data" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
	    </form>
	  </div>
	</nav><br>
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
		{{session('sukses')}}
	</div>
	@endif
		<div class="container">
	@yield('content')
	</div>

	<!-- Optional JavaScript -->   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- End of avaScript -->
</body>
</html> 
