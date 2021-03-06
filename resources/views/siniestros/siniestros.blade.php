@extends('layout.master')
@section('cuerpo')
<div class="titulo">LISTA DE EQUIPOS USUARIOS POR AREA </div>
<div style="border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;border:1px #036 solid;margin-top:4px;padding:4px 0 4px 0;overflow:auto;">
		<table id="example" class="display" cellspacing="5" width="100%" style="border-radius:4px 4px 4px 4px;-moz-border-radius:4px 4px 4px 4px;-webkit-border-radius:4px 4px 4px 4px;border:1px #444444 solid;font-family:Verdana, Geneva, sans-serif;">
		<thead style="font-size:11px;color:#FFF;background-color:#444444;heigth=40px;">
		<tr>
			<th>SINIESTRO</th>
			<th>USUARIO</th>
			<th>EQUIPO</th>
			<th>AREA</th>
		</tr>
		</thead>
		<tbody style="font-size:11px;">
			@foreach($siniestro as $siniestro)
			<tr>
				<td>				
				<a onclick="confirmarRegistro({{$siniestro->id_usu}})"><span class="icon-classic-computer" style="font-size:20px; color:orange;" title="Registrar"></span></a>
				</td>
				<td>{{$siniestro->nom_usu.' '.$siniestro->app_usu.' '.$siniestro->apm_usu}}</td>
				<td>{{$siniestro->nom_equ.' '.$siniestro->mar_equ.' '.$siniestro->mod_equ.'/ip'.$siniestro->ip_equ}}</td>
				<td>{{$siniestro->nom_are}}</td>
			</tr>
			@endforeach
		</tbody>
		</table>
</div>
   <script type="text/javascript">
function confirmarRegistro($id)
{
	
   if (window.confirm("Desea registar el siniestro?") == true)
      {
         window.location = "{{url('registrar/siniestro')}}"+'/'+$id;
      }
else
   {
      window.location.reload();
   }
}
</script>
@stop