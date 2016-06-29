@extends('layout.master')
@section('cuerpo')
<div class="titulo">CONSULTA DE EQUIPO POR MARCA </div>
			<form  action="{{url('marcaEquipo')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<!--TIPOS DE DOCUMENTOS-->
			<fieldset class="fieldcuerpo" align="left" style="height: 555px;">
				<center>
            <div class="colordiv">
                <center>
	        <table>
	        <tr>
	            <td rowspan="5">
	            <img height="160px" width="175px" src="{{url('img/images/lupa.png')}}">
	            </td>
	        </tr>
	        <tr>
	        <tr style="height: 50px;">
			   <td width="100px" class="lblnombre">Ingrese Marca:</td>
			   <td width="100px">
			   	<input type="text" name="mar_equ"  class="txtselect short" style="width:200px;">
				<label style="font-size:10px;color:red;">{{ $errors->first('mar_equ') }}</label>
			   </td>	
		    </tr>  
	        </tr>
	        <tr>
	           <td height="40px" colspan="2" style="padding-left:25px" align="center">
				<input type="submit" class="botones ico-btnsearch" value="BUSCAR">
               </td>
           </tr>
	</table>
	</center>
	</div>
</form>
@stop