@extends('layout.master')
@section('cuerpo')
<div class="titulo">USUARIOS POR NOMBRE </div>
<div style="border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;border:1px #036 solid;margin-top:4px;padding:4px 0 4px 0;overflow:auto;">
		<table id="example" class="display" cellspacing="5" width="100%" style="border-radius:4px 4px 4px 4px;-moz-border-radius:4px 4px 4px 4px;-webkit-border-radius:4px 4px 4px 4px;border:1px #444444 solid;font-family:Verdana, Geneva, sans-serif;">
		<thead style="font-size:11px;color:#FFF;background-color:#444444;heigth=40px;">
		<tr>
			<th>CI</th>
			<th>NOMBRE</th>
            <th>APELLIDOS</th>
			<th>CELULAR</th>
			<th>EMAIL</th>
			<th>AREA</th>
		</tr>
		</thead>
		<tbody style="font-size:11px;">
			@foreach($usuario as $usuario)
			<tr>
				<td>{{$usuario->ci_usu}}</td>
				<td>{{$usuario->nom_usu}}</td>
				<td>{{$usuario->app_usu.' '.$usuario->apm_usu}}</td>
				<td>{{$usuario->cel_usu}}</td>
				<td>{{$usuario->email_usu}}</td>
				<td>{{$usuario->nom_are}}</td>
			</tr>
			@endforeach
		</tbody>
		</table>
</div>
@stop