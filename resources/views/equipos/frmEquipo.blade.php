@extends('layout.master')
@section('cuerpo')
<div class="titulo">REGISTRO DE EQUIPO </div>
<form name="frmregusuario" id="frmregusuario" action="{!!url('guardar/equipo')!!}" method="post">
	<fieldset class="fieldcuerpo" align="left" >
	<legend>DATOS DEL EQUIPO</legend>
		<table>
		<tr style="height:30px;">
			<td width="90px" class="lblnombre">NOMBRE :</td>
			<td width="480px"><input type="text" name="nom_equ" class="txtcampo " placeholder="nombre del equipo">
			<label style="font-size:10px;color:red;">{{ $errors->first('nom_equ') }}</label>
			<input type="hidden" name="x" value="1">
			</td>
		</tr>
		<tr style="height:30px;">
			<td width="90px" class="lblnombre">MARCA :</td>
			<td width="480px"><input type="text" name="mar_equ" class="txtcampo " placeholder="Marca">
			<label style="font-size:10px;color:red;">{{ $errors->first('mar_equ') }}</label>
			</td>
		</tr>
		<tr style="height:30px;">
			<td width="90px" class="lblnombre">MODELO :</td>
			<td width="480px"><input type="text" name="mod_equ" class="txtcampo " placeholder="Modelo">
			<label style="font-size:10px;color:red;">{{ $errors->first('mod_equ') }}</label>
			</td>
		</tr>
		<tr style="height:30px;">
			<td width="90px" class="lblnombre">SISTEMA OPERATIVO :</td>
			<td width="480px"><input type="text" name="so_equ" class="txtcampo " placeholder="Sistema Opertivo">
			<label style="font-size:10px;color:red;">{{ $errors->first('so_equ') }}</label>
			</td>
		</tr>
		<tr style="height:30px;">
			<td width="90px" class="lblnombre">IP DEL EQUIPO</td>
			<td width="480px"><input type="text" name="ip_equ" class="txtcampo " placeholder="Direccion ip">
			<label style="font-size:10px;color:red;">{{ $errors->first('ip_equ') }}</label>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</td>
		</tr>
		<tr>
			<td width="90px" class="lblnombre">AREA</td>
			<td style="height:30px;">
			<select name="area"  class="txtselect short" style="width:200px;">
				<option value="">SELECCIONE</option>
				@foreach($area as $area)						
				<option value="{{$area->id_are}}">{{$area->nom_are}}</option>
				@endforeach
			</select>
			<label style="font-size:10px;color:red;">{{ $errors->first('area') }}</label>	
			</td>
		</tr>
		<tr style="height:30px;">
			<td width="90px" class="lblnombre">SE_EQU :</td>
			<td width="480px"><input type="text" name="se_equ" class="txtcampo " placeholder="">
			<label style="font-size:10px;color:red;">{{ $errors->first('se_equ') }}</label>
			</td>
		</tr>
		<tr style="height:30px;">
			<td width="90px" class="lblnombre">CS_EQU :</td>
			<td width="480px"><input type="text" name="cs_equ" class="txtcampo" placeholder="">
			<label style="font-size:10px;color:red;">{{ $errors->first('cs_equ') }}</label>
			</td>
		</tr>
		<tr style="height:30px;">
			<td width="90px" class="lblnombre">DESCRIPCION:</td>
			<td width="480px"><textarea name="des_equ"  cols="40" rows="5" placeholder="Descripcion del equipo"></textarea>
			<label style="font-size:10px;color:red;">{{ $errors->first('des_equ') }}</label>
			</td>
		</tr>

		</table>
						<center>
				<table>
						<tr style="height: 50px;">
							<td>
								<input type="submit" class="botones ico-btnsave" name="submit_reg" value="GUARDAR DATOS">
                 				<input type="reset"  onclick="document.location.reload();" class="botones ico-btnlimpiar" value="LIMPIAR DATOS">
                 			</td>
						</tr>
					</table>
				</center>
	</legend>
</form>
@stop