@extends('layout.master')
@section('cuerpo')


<div class="titulo">REGISTRO DE EQUIPO </div>
<form name="frmregusuario" id="frmregusuario" action="{!!url('guardar/siniestro')!!}" method="post">
	<fieldset class="fieldcuerpo" align="left" >
	<legend>DATOS DEL EQUIPO</legend>
		<table>
		<tr style="height:30px;">
			<td width="90px" class="lblnombre">DATOS DEL USUARIO:</td>
			<td width="480px"><input type="text" style="width: 300px;"" readonly="" class="txtcampo "
			value="{{$siniestro->nom_usu.' '.$siniestro->app_usu.' '.$siniestro->apm_usu}}">
			</td>
		</tr>
		<tr style="height:30px;">
			<td width="90px" class="lblnombre">DATOS DEL EQUIPO :</td>
			<td width="480px"><input style="width: 300px;" type="text"  class="txtcampo" readonly="" 
			value="{{$siniestro->nom_equ.' '.$siniestro->mar_equ.' '.$siniestro->mod_equ.' '.$siniestro->ip_equ}}"></td>
		</tr>
		<tr style="height:30px;">
			<td width="90px" class="lblnombre">AREA :</td>
			<td width="480px"><input style="width: 300px;" value="{{$siniestro->nom_are}}" type="text" readonly="" class="txtcampo ">
			</td>
		</tr>
		<tr style="height:30px;">
			<td width="90px" class="lblnombre">FECHA :</td>
			<td width="480px"><input style="width: 300px;" name="fecha" type="date"  class="txtcampo">
			<label style="font-size:10px;color:red;">{{ $errors->first('fecha') }}</label></td>
		</tr>

		<tr style="height:30px;">
			<td width="90px" class="lblnombre">OBSERVACIONES:</td>
			<td width="480px"><textarea name="observaciones"  cols="40" rows="5" placeholder="Descripcion del equipo"></textarea>
			<label style="font-size:10px;color:red;">{{ $errors->first('observaciones') }}</label>
			</td>
		</tr>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="equipo" value="{{$siniestro->id_equ}}">
		<input type="hidden" name="usuario" value="{{$siniestro->id_usu}}">
		<input type="hidden" name="area" value="{{$siniestro->id_are}}">


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