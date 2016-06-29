<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>IMPUESTOS NACIONALES</title>
		<meta name="Description" content=""/>
		<meta name="Keywords" content=""/>
		<meta name="Author" content=""/>
		<meta name="Robots" content=""/>
		<meta http-equiv="imagetoolbar" content="no"/>
		<link rel="stylesheet" href="{{ asset('css/style_general.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style_menu.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style_form.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style_botones.css') }}">
		<link rel="stylesheet" href="{{ asset('icons/style.css') }}">
		<link rel="stylesheet" href="{{asset('css/jquery.confirm.css')}}">
		<link rel="stylesheet" href="{{asset('css/jquery.dataTables.css')}}">
		<link rel="stylesheet"  href="{{asset('css/shCore.css')}}">
		<link rel="stylesheet"  href="{{asset('css/demo.css')}}">
		<script type="text/javascript" language="javascript" src="{{asset('jquery-1.12.4.min.js')}}"></script>
		<script type="text/javascript" language="javascript" src="{{asset('js/jquery.confirm.js')}}"></script>
		<script type="text/javascript" language="javascript" src="{{asset('js/jquery.js')}}"></script>
		<script type="text/javascript" language="javascript" src="{{asset('js/jquery.dataTables.js')}}"></script>
		<script type="text/javascript" language="javascript" src="{{asset('js/shCore.js')}}"></script>
		<script type="text/javascript" language="javascript" src="{{asset('js/demo.js')}}"></script>

		<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>
	</head>
<body>
<div id="daddy">
	<!-- header -->
	<div id="header">
		<div id="logo">
			
			<span id="logo-text"><a href=""></a></span>
		</div>
		<!-- menu -->
		<div id="menu">
			<ul>
				<li><a href="" id="active">Principal</a></li>
				<li><a href="">MOD 1</a></li>
				<li><a href="">MOD 2</a></li>
				<li><a href="">MOD 3</a></li>
				<li><a href="">MOD 4</a></li>
				<li><a href="">MOD 5</a></li>
			</ul>
		</div>
		<!-- ticker -->
		
		<div class="clear"></div>
		<!-- headerimage -->
		<div id="headerimage">
			<!-- download -->
			<div id="download">
				<center>
				
					<span id="download-text"><a href="">
					<br/>
				
					</a></span>
				</center>
			</div>
			
			
		</div>
	</div>
	
	<div id="content">
		<div id="cA">
			<nav class="vnav2">

	                <li class="active2">
	                    <a href="{{ url('iniciarSession') }}" class="vnav-item2">INGRESAR<span class="vnav-counter2">LOGIN</span></a>
	                    <a href="{{ url('/') }}" class="vnav-item2">INFORMACIONES<span class="vnav-counter2">INFORMACIONES</span></a>
	                </li>
	            </ul>
	        </nav> 
	        <center>
			<div class="datepicker"></div>
			</center>


		</div><!-- cA -->
<div id="cB">
@section('cuerpo')
@show
</div>
<div class="Cpad">
			<br class="clear" />
		</div>
		</div><!-- Cpad -->

	</div><!-- content -->
	<div id="properspace"></div><!-- properspace -->
</div><!-- daddy -->
<div id="footer">
	<div id="foot">
		<div id="foot1"><a href="">&copy; Copyright 2016</a> - Sistemas </div><!-- foot1 -->
		<span id="foot2"><a href="">EL ALTO</a> - <a href="">BOLIVIA</a>
		<div id="foot2">
			</span><center>Av. Independencia #200 <a href=""></span></a><br>Telf. 2 - <a href="">2852054</a> Fax. +(591)(2)-<a href="">2851025</a></center>
		</div><!-- foot1 -->
	</div><!-- foot -->
</div><!-- footer -->
</body>
</html>

			
		