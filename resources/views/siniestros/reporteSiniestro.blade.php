@extends('layout.master')
@section('cuerpo')



<div class="titulo">REPORTE DE SINIESTRO </div>
<form name="frmregusuario" id="frmregusuario" action="{!!url('generar')!!}" method="post">
				<!--TIPOS DE DOCUMENTOS-->
				<fieldset class="fieldcuerpo" align="left" >
					<legend>DATOS DE REPORTE</legend>
					<table>

						<tr style="height:30px;">
							<td width="90px" class="lblnombre">A:</td>
							<td width="480px"><input type="text" name="a" class="txtcampo " placeholder="NOMBRE COMPLETO DEL DESTINATARIO">
							<label style="font-size:10px;color:red;">{{ $errors->first('a') }}</label>
							</td>
						</tr>
						<tr style="height:30px;">
							<td width="90px" class="lblnombre">CARGO:</td>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<td width="480px"><input type="text" name="cargo" class="txtcampo "><label style="font-size:10px;color:red;">{{ $errors->first('cargo') }}</label>		
							</td>
						</tr>
						<tr style="height:30px;">
							<td width="90px" class="lblnombre">DE :</td>
							<td width="480px"><input type="text" name="de" class="txtcampo " placeholder="NOMBRE COMPLETO DEL REMITENTE">
							<label style="font-size:10px;color:red;">{{ $errors->first('de') }}</label>
							</td>
						</tr>
						<tr style="height:30px;">
							<td width="90px" class="lblnombre">FECHA</td>
							<td width="480px"><input type="date" name="fecha" class="txtcampo">
							<label style="font-size:10px;color:red;">{{ $errors->first('fecha') }}</label>		
							</td>
							<input type="hidden" name="id" value="{{ $id }}">
						</tr>
					</table>
				</fieldset>
				<center>
				<table>
						<tr style="height: 50px;">
							<td>
								<input type="submit" class="botones ico-btnsave" name="submit_reg" value="Generar Reporte">
                 				<input type="reset"  onclick="document.location.reload();" class="botones ico-btnlimpiar" value="LIMPIAR DATOS">
                 			</td>
						</tr>
					</table>
				</center>
</form>


@stop