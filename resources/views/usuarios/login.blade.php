@extends('principal')
@section('cuerpo')
<div class="titulo">INICIAR SESIÓN </div>
			<form action="{{ url('admin.auth.login') }}" method="post">
				<!--TIPOS DE DOCUMENTOS-->
				<fieldset class="fieldcuerpo" align="left" style="height: 300px;">
				<center>
					<table>
					<tr>
						<td>
						<table style="padding-top: 40px;">
					    <tr>
                            <td><img height="200px" width="200px" src="{{ asset('img/images/team.png')}}" title="Login"></td>
                        </tr>
                    </table>
                    </td>
                    <td>
                    <table style="padding-top:40px;">
						<tr style="height: 50px;">
							<td width="100px" class="lblnombre">Nombre</td>
							<td width="100px"><input type="text" name="nick_usu"  class="txtcampo" placeholder="NOMBRE DE USUARIO" onpaste="return false"></td>	
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						</tr>
						<tr>
							<td width="100px" class="lblnombre">Password</td>
							<td width="100px"><input type="password" name="pass_usu"  class="txtcampo"  placeholder="PASSWORD" onpaste="return false"></td>
				    	</tr>   
						<tr style="height: 80px; padding-left:60px;" align="center">
							<td><input type="submit" name="submit_log" class="botones ico-btnsave" value="INGRESAR"></td>
                 			<td><input type="reset" class="botones ico-btnlimpiar" value="LIMPIAR DATOS"></td>
						</tr>
				        </td>
				        </tr>
				    </table>
						</tr>
					</table>
					</td>
					</tr>
					</table>
				</fieldset>
			</form>
@stop