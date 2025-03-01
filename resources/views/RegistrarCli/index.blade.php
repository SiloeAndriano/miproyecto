<!doctype html>
<!--
	Photogenic by FreeHTML5.co
	URL: https://freehtml5.co
-->
<html lang="en">


<head>
<title>Productos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('/https://use.fontawesome.com/releases/v5.6.3/css/all.css')}}"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="{{asset('/owl-carousel/assets/owl.carousel.min.css')}}" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/css2/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css2/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css1/container.css')}}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{('/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{('/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{('/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{('/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
<link rel="stylesheet" type="text/css" href="{{('/styles/categories.css')}}">
<link rel="stylesheet" type="text/css" href="{{('/styles/categories_responsive.css')}}">
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">

</head>

<body>
<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
        <img src="/images/logo.png" alt="">
			<div class="logo"><a href="#">Photogenic</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="/Layout/home">Inicio</a></li>
					<li><a href="/miweb/portafolio">Portafolio</a></li>
					<li><a href="/miweb/news">Productos</a></li>
                    <li><a href="/miweb/sobre">Acerca de</a></li>
					<li><a href="/miweb/contacto">Contacto</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<div class="search header_search">
					
				</div>
                </div>
                </div>

			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Photogenic</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="images/magnifying-glass.svg" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="#">Inicio</a></li>
				<li class="menu_mm"><a href="/miweb/portafolio">Portafolio</a></li>
				<li class="menu_mm"><a href="/miweb/news">Productos</a></li>
				<li class="menu_mm"><a href="/miweb/sobre">Acerca de</a></li>
				<li class="menu_mm"><a href="/miweb/contacto">Contacto</a></li>
			</ul>
		</nav>
	</div>
<br>
<br>
<br>
<br><br><br><br><br>
          
          <body>
          <center>
               <h1> CONSULTA GENERAL DE LOS DATOS </h1>
               <br>

          <div class="row">
               <div class="col-lg-12 margin-tb">
               
               <br>
               <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('RegistrarCli.create') }}"> REGISTRAR CLIENTE </a>
               </div>
          </div>
     </div>
@if ($message = Session::get('Aceptado'))
          <div class="alert alert-success">
          <p>{{ $message }} </p>
          </div>
     @endif
     

     <table class="table table-hover table-borderless">
     <thead class="thead-light">
          <tr>
               <th> ID </th>
               <th> NOMBRE DEL CLIENTE </th>
               <th> APELLIDOS </th>
               <th> DIRECCION </th>
               <th> PRODUCTO </th>
               <th> CANTIDAD </th>
               <th width="300px"> Opciones </th>
          </tr>
          </thead>  
          <tbody>
          @foreach ($datoscli as $registrarcli)
          <tr>

               <td>{{ $registrarcli->id}} </td>
               <td>{{ $registrarcli->nombrecli}} </td>
               <td>{{ $registrarcli->apellidos }} </td>
               <td>{{ $registrarcli->direccion }} </td>
               <td>{{ $registrarcli->producto }} </td>
               <td>{{ $registrarcli->cantidad }} </td>
          <td>
               
               <form method="post" action="{{url('/RegistrarCli/'.$registrarcli->id) }}">
               <a href="{{ url('/RegistrarCli/'. $registrarcli->id)}}"> <img src="{{asset('/images/ver.png')}}"> </a>
               <a href="{{ url('/RegistrarCli/'.$registrarcli->id.'/edit') }}"><img src="{{asset('/images/editar.png')}}"></a>
               {{csrf_field() }}
               
               {{method_field('DELETE') }}

               <a onclick="return confirm('¿Esta seguro?');"><img src="{{asset('/images/borrar.png')}}"> </a>
               </form>

     </td>
     </tr>
     @endforeach
     </tbody>
     </table>
     </center>
     {{$datoscli->links()}} 
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
    <footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="footer_logo"><a href="#">Photogenic</a></div>

					
					<div class="footer_social">
						<ul>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<br>
					<div class="col-lg-12">
                <p>&copy; 2020 Photogenic. All rights Reserved <a href="" target="_blank"></a>.</p>
             </div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="{{('/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{('/styles/bootstrap4/popper.js')}}"></script>
<script src="{{('/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{('/plugins/easing/easing.js')}}"></script>
<script src="{{('/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{('/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{('/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.js')}}"></script>
<script src="{{('/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
<script src="{{('/js/categories_custom.js')}}"></script>

    <script src="{{asset('/js1/jquery.min.js')}}"></script>
    <script src="{{asset('/js1/bootstrap.min.js')}}"></script>
    <script src="{{asset('/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js1/isotope-docs.min.js?6')}}"></script>
    <script src="{{asset('/js1/main.js')}}"></script>
</body>
</html>