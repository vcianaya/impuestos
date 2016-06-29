@extends('layout.master')
@section('cuerpo')
<div class="titulo">CONSULTA DE EQUIPO POR AREA </div>
			<form  action="{{url('areaEquipo')}}" method="post">
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
			   <td width="100px" class="lblnombre">Seleccione area:</td>
			   <td width="100px">
			   	<select name="area"  class="txtselect short" style="width:200px;">
					<option value="">SELECCIONE</option>
					@foreach($area as $area)						
					<option value="{{$area->id_are}}">{{$area->nom_are}}</option>
					@endforeach
				</select>
				<label style="font-size:10px;color:red;">{{ $errors->first('area') }}</label>	
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