@extends('layout.master')
@section('cuerpo')
<div class="titulo">LISTA DE SINIESTROS </div>
<div style="border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;border:1px #036 solid;margin-top:4px;padding:4px 0 4px 0;overflow:auto;">
		<table id="example" class="display" cellspacing="5" width="100%" style="border-radius:4px 4px 4px 4px;-moz-border-radius:4px 4px 4px 4px;-webkit-border-radius:4px 4px 4px 4px;border:1px #444444 solid;font-family:Verdana, Geneva, sans-serif;">
		<thead style="font-size:11px;color:#FFF;background-color:#444444;heigth=40px;">
		<tr>
			<th>REPORTE</th>
            <th>CI</th>
            <th>USUARIO</th>
            <th>AREA</th>
			<th>IP</th>
			<th>NOMBRE DEL EQUIPO</th>
			<th>MARCA</th>
			<th>MODELO</th>
			<th>FECHA</th>

		</tr>
		</thead>
		<tbody style="font-size:11px;">
			@foreach($siniestro as $siniestro)
			<tr>
				<td>						
				<a href="{{url('reporte/siniestro').'/'.$siniestro->id_sin}}" style="padding-right:15px;"><span class="icon-print" style="font-size:20px; color:blue;" title="Reporte"></span></a>
				<a target="_blank" href="{{url('detalle/siniestro').'/'.$siniestro->id_sin}}" ><span class="icon-browser" style="font-size:20px; color:#337CCE;" title="Detalle"></span></a>
				</td>
				<td>{{$siniestro->ci_usu}}</td>
				<td>{{$siniestro->nom_usu.' '.$siniestro->app_usu.' '.$siniestro->apm_usu}}</td>
				<td>{{$siniestro->nom_are}}</td>
				<td>{{$siniestro->ip_equ}}</td>
				<td>{{$siniestro->nom_equ}}</td>
				<td>{{$siniestro->mar_equ}}</td>
				<td>{{$siniestro->mod_equ}}</td>
				<td>{{$siniestro->fecha}}</td>
			</tr>
			@endforeach
		</tbody>
		</table>
</div>

@stop