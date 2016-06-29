<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use App\Http\Requests\guardarEquipoRequest;
use App\Http\Requests\porNombreRequest;
use App\Http\Requests\porAreaRequest;
use App\Http\Requests\porIpRequest;
use DB;
use App\Equipo;
class EquipoController extends Controller
{
    public function crearEquipo()
    {
    	$area = DB::table('area')->select('nom_are', 'id_are')->get();
    	return View::make('equipos.frmEquipo',array('area'=>$area));
    }
    public function guardarEquipo(guardarEquipoRequest $request)
    {
    	$x =$request->input('x');
   		$id =$request->input('id');
   		switch ($x) {
    case 0:
    	DB::table('equipo')
            ->where('id_equ', $id)
            ->update([
               'nom_equ' => $request->input('nom_equ'),
               'mar_equ'=>$request->input('mar_equ'),
               'mod_equ' => $request->input('mod_equ'),
               'so_equ'=>$request->input('so_equ'),
               'ip_equ'=>$request->input('ip_equ'),
               'area'=>$request->input('area'),
               'se_equ'=>$request->input('se_equ'),
               'cs_equ'=>$request->input('cs_equ'),
               'des_equ'=>$request->input('des_equ'),
               ]);
            return redirect('admin/equipo');

   		break;
    case 1:
    	$equipo = new Equipo;
    	$equipo->nom_equ= $request->input('nom_equ');
    	$equipo->dis_equ= 1;
    	$equipo->mar_equ= $request->input('mar_equ');
    	$equipo->mod_equ= $request->input('mod_equ');
    	$equipo->so_equ= $request->input('so_equ');
    	$equipo->ip_equ= $request->input('ip_equ');
    	$equipo->area= $request->input('area');
    	$equipo->se_equ= $request->input('se_equ');
    	$equipo->cs_equ= $request->input('cs_equ');
    	$equipo->des_equ= $request->input('des_equ');
    	$equipo->save();
    	return redirect('crear/equipo');
    	break;
    	}
    }
   public function administrarEquipo()
   {
   	$equipo = DB::table('equipo')
   	
            ->join('area', 'equipo.area', '=', 'area.id_are')
            ->select('equipo.id_equ','equipo.ip_equ','equipo.nom_equ','equipo.mar_equ','equipo.mod_equ','equipo.so_equ','area.nom_are')
            ->where('equipo.dis_equ', '=', 1)

            ->get();
   	return View::make('equipos.administrarequipo',array('equipo'=>$equipo));
   }

   public function modificarEquipo($id )
   {   
  $equipo = DB::table('equipo')->where('id_equ', $id)->first();  
	$area = DB::table('area')->select('nom_are', 'id_are')->get();
   	return View::make('equipos.modificarEquipo',array('equipo'=>$equipo,'area'=>$area));
   }
      public function eliminarEquipo($id )
   {   
	  	DB::table('equipo')
            ->where('id_equ', $id)
            ->update([
               'dis_equ' => 0,
               ]);
            return redirect('admin/equipo');
   }
    public function restaurarEquipo()
   {
   	$equipo = DB::table('equipo')
   	
            ->join('area', 'equipo.area', '=', 'area.id_are')
            ->select('equipo.id_equ','equipo.ip_equ','equipo.nom_equ','equipo.mar_equ','equipo.mod_equ','equipo.so_equ','area.nom_are')
            ->where('equipo.dis_equ', '=', 0)

            ->get();
   	return View::make('equipos.restaurarequipo',array('equipo'=>$equipo));
   }
   
         public function habilitarEquipo($id )
   {   
	  	DB::table('equipo')
            ->where('id_equ', $id)
            ->update([
               'dis_equ' => 1,
               ]);
            return redirect('res/equipo');
   }

   public function porArea(porAreaRequest $request)
   {
    $area=$request->input('area');
    $equipo = DB::table('equipo')    
            ->join('area', 'equipo.area', '=', 'area.id_are')
            ->select('equipo.ip_equ','equipo.nom_equ','equipo.mar_equ','equipo.mod_equ','equipo.so_equ','area.nom_are')
            ->where('equipo.area', $area)
            ->where('equipo.dis_equ', 1)
            ->get();
    return View::make('equipos.grillaporNombre',array('equipo'=>$equipo));
   }
    public function porNombre(porNombreRequest $request)
   {
    $nombre=$request->input('nom_equ');
    $equipo = DB::table('equipo')    
            ->join('area', 'equipo.area', '=', 'area.id_are')
            ->select('equipo.ip_equ','equipo.nom_equ','equipo.mar_equ','equipo.mod_equ','equipo.so_equ','area.nom_are')
            ->where('equipo.nom_equ','like', '%'.$nombre.'%')
            ->where('equipo.dis_equ', 1)
            ->get();
    return View::make('equipos.grillaporNombre',array('equipo'=>$equipo));
   }
       public function porMarca(porIpRequest $request)
   {
    $marca=$request->input('mar_equ');
    $equipo = DB::table('equipo')    
            ->join('area', 'equipo.area', '=', 'area.id_are')
            ->select('equipo.ip_equ','equipo.nom_equ','equipo.mar_equ','equipo.mod_equ','equipo.so_equ','area.nom_are')
            ->where('equipo.mar_equ','like', '%'.$marca.'%')
            ->where('equipo.dis_equ', 1)
            ->get();
    return View::make('equipos.grillaporNombre',array('equipo'=>$equipo));
   }
}
