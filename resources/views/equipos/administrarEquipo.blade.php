@extends('layout.master')
@section('cuerpo')
<div class="titulo">LISTA DE EQUIPOS </div>
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
				<a href="{{url('modificar/equipo').'/'.$equipo->id_equ}}"><span class="icon-edit" style="font-size:20px; color:orange;" title="Editar"></span></a>
				
				<a onclick="confirmarRegistro({{$equipo->id_equ}})"><span class="icon-erase" style="font-size:20px; color:red;" title="Eliminar"></span></a>
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
	
   if (window.confirm("Desea eliminar el registro?") == true)
      {
         window.location = "{{url('eliminar/equipo')}}"+'/'+$id;
      }
else
   {
      window.location.reload();
   }
}
</script>

@stop