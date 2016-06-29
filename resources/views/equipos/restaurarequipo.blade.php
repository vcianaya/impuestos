@extends('layout.master')
@section('cuerpo')
<div class="titulo">LISTA DE EQUIPOS NO DISPONIBLES </div>
<div style="border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;border:1px #036 solid;margin-top:4px;padding:4px 0 4px 0;overflow:auto;">
		<table id="example" class="display" cellspacing="5" width="100%" style="border-radius:4px 4px 4px 4px;-moz-border-radius:4px 4px 4px 4px;-webkit-border-radius:4px 4px 4px 4px;border:1px #444444 solid;font-family:Verdana, Geneva, sans-serif;">
		<thead style="font-size:11px;color:#FFF;background-color:#444444;heigth=40px;">
		<tr>
			<th>ACCION</th>
			<th>IP</th>
			<th>NOMBRE</th>
			<th>MARCA</th>
			<th>MODELO</th>
            <th>SISTEMA OPERATIVO</th>
            <th>AREA</th>
		</tr>
		</thead>
		<tbody style="font-size:11px;">
			@foreach($equipo as $equipo)
			<tr>
				<td>				
				<a onclick="confirmarRegistro({{$equipo->id_equ}})"><span class="icon-grid" style="font-size:20px; color:green;" title="Restaurar"></span></a>
				</td>
				<td>{{$equipo->ip_equ}}</td>
				<td>{{$equipo->nom_equ}}</td>
				<td>{{$equipo->mar_equ}}</td>
				<td>{{$equipo->mod_equ}}</td>
				<td>{{$equipo->so_equ}}</td>
				<td>{{$equipo->nom_are}}</td>
			</tr>
			@endforeach
		</tbody>
		</table>
</div>
   <script type="text/javascript">
function confirmarRegistro($id)
{
	
   if (window.confirm("Desea habilitar el equipo?") == true)
      {
         window.location = "{{url('habilitar/equipo')}}"+'/'+$id;
      }
else
   {
      window.location.reload();
   }
}
</script>

@stop