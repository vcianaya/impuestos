@extends('layout.master')
@section('cuerpo')



<div class="titulo">REGISTRO DE USUARIO </div>
<form name="frmregusuario" id="frmregusuario" action="{!!url('guardar/usuario')!!}" method="post">
				<!--TIPOS DE DOCUMENTOS-->
				<fieldset class="fieldcuerpo" align="left" >
					<legend>DATOS DE USUARIO</legend>
					<table>
						<tr style="height:30px;">
							<td width="90px" class="lblnombre">C.I.</td>
							<td width="480px"><input type="text" name="ci_usu" class="txtcampo "">
							<label style="font-size:10px;color:red;">{{ $errors->first('ci_usu') }}</label>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="x" value="1">
							</td>
						</tr>
						<tr style="height:30px;">
							<td width="90px" class="lblnombre">NOMBRE:</td>
							<td width="480px"><input type="text" name="nom_usu" class="txtcampo "placeholder="NOMBRE">
							<label style="font-size:10px;color:red;">{{ $errors->first('nom_usu') }}</label>
							</td>
						</tr>
						<tr style="height:30px;">
							<td width="90px" class="lblnombre">APELLIDO PATERNO</td>
							<td width="480px"><input type="text" name="app_usu" class="txtcampo "placeholder="apelido paterno"><label style="font-size:10px;color:red;">{{ $errors->first('app_usu') }}</label>		
							</td>
						</tr>
						<tr style="height:30px;">
							<td width="90px" class="lblnombre">APELLIDO MATERNO</td>
							<td width="480px"><input type="text" name="apm_usu" class="txtcampo "placeholder="APELLIDO MATERNO">
							<label style="font-size:10px;color:red;">{{ $errors->first('apm_usu') }}</label>
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
						<tr>
							<td width="90px" class="lblnombre">EQUIPO</td>
							<td style="height:30px;">
							<select name="equipo"  class="txtselect short" style="width:200px;">
								<option value="">SELECCIONE</option>
								@foreach($equipo as $equipo)						
								<option value="{{$equipo->id_equ}}">{{$equipo->nom_equ.' ip/'.$equipo->ip_equ}}</option>
								@endforeach
							</select>
							<label style="font-size:10px;color:red;">{{ $errors->first('equipo') }}</label>	
							</td>

						</tr>
						<tr style="height:30px;">
							<td width="90px" class="lblnombre">CELULAR</td>
							<td width="480px"><input type="text" name="cel_usu" class="txtcampo "placeholder="Nro cel">
							<label style="font-size:10px;color:red;">{{ $errors->first('cel_usu') }}</label>		
							</td>
						</tr>
						<tr style="height:30px;">
							<td width="90px" class="lblnombre">EMAIL</td>
							<td width="480px"><input type="text" name="email" class="txtcampo "placeholder="em@il">
							<label style="font-size:10px;color:red;">{{ $errors->first('email') }}</label>
							</td>
						</tr>
					</table>
				</fieldset>
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
</form>


@stop