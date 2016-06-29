<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/estylospdf.css">
</head>
<body>

<div class="titulo">
<table border="solid" class="tabla">
	<tr>
		<td align="center"><h3>SERVICIO DE IMPUESTOS NACIONALES</h3></td>
		<td><img src="img/images/impuestosloo.jpg" class="logo"></td>
	</tr>
	<tr>
		<td colspan="2"><img src="img/images/bandera.png" class="bandera"></td>
	</tr>
</table>
</div>
<div class="contenido">
	<fieldset class="fieldcuerpo" align="left" >
		<legend>INFORME</legend>
		<table style="padding-top:20px; padding-left: 50px; font-size:15px;">
			<tr>
				<td>A: </td>
				<td>{{ $datos['a'] }}</td>
			</tr>
			<tr>
				<td></td>
				<td>{{ $datos['cargo'] }}</td>
			</tr>
			<tr>
				<td></td><td>SERVICIO DE IMPUESTOS NACIONALES</td>
			</tr>
			<tr>
				<td>DE:</td>
				<td>{{ $datos['de'] }}</td>
			</tr>
			<tr>
				<td>Fecha:</td>
				<td>{{ $datos['fecha'] }}</td>
			</tr>
		</table>
	</fieldset>		
<br>
<fieldset class="fieldcuerpo" align="left" >
		<legend>DETALLE DEL EQUIPO</legend>
		<table style="padding-top:20px; padding-left: 50px; font-size:15px; width:100PX ">
		<thead>
			<tr style="font-size: 13px;font-weight:normal;padding: 8px;background:#b9c9fe;   border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039;">
				<td>MARCA</td><td>MODELO</td><td>S/T</td><td>SIAF</td><td>USUARIO</td><td>AREA</td>
			</tr>
		</thead>
		<tr style="font-size: 13px; padding:8px;background:#e8edff;border-bottom:1px solid#fff;color:#669;   border-top: 1px solid transparent;">
			<td>{{ $siniestro->mar_equ }}</td>
			<td>{{ $siniestro->mod_equ }}</td>
			<td>??????</td>
			<td>{{ $siniestro->cs_equ }}</td>
			<td>{{ $siniestro->nom_usu.' '.$siniestro->app_usu.' '.$siniestro->apm_usu }}</td>
			<td>{{ $siniestro->nom_are }}</td>
		</tr>
		</table>
</fieldset>
<br>
<fieldset class="fieldcuerpo" align="left" >
		<legend>OBSERVACIONES</legend>
		<div style="padding-top:20px; font-size:14px;">
			{{ $siniestro->observaciones }}
		</div>
</fieldset>
</div>

</body>
</html>