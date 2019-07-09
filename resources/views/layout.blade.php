<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Kulroom</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">
	
	<link rel="stylesheet" href="{{ asset('/css/main.css') }}">

	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
    <header id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                <a href="index.html"><img src="{{ asset('/img/log.png') }}" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#home">Home</a></li>
                    <li><a href="#offer">Catatan</a></li>
                    <li><a href="#project">Tugas</a></li>
                </ul>
                </nav><!-- #nav-menu-container -->		    		
            </div>
        </div>
    </header>

    <!-- start banner Area -->
    <section class="banner-area" id="home">	
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-7">
                    <h1>
                        KULROOM				
                    </h1>
                    <p class="pt-20 pb-20">
                        Teman-teman bisa melihat berbagai catatan mata kuliah dalam perkuliahan dan daftar tugas yang diberikan oleh dosen.
                    </p>
                </div>											
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    
    @yield('content')

    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>