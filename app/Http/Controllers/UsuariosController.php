<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use App\Http\Requests\guardarUsuarioRequest;
use App\Http\Requests\uporNombreRequest;
use App\Http\Requests\uporAreaRequest;
use DB;
use App\Usuario;




class UsuariosController extends Controller
{
   public function crearUsuario()
   {
   	$area = DB::table('area')->select('nom_are', 'id_are')->get();
   	$equipo = DB::table('equipo')->select('id_equ', 'nom_equ','ip_equ')->where('dis_equ', '=', 1)->get();
   	return View::make('usuarios.frmusuario',array('area'=>$area,'equipo'=>$equipo));
   }
   public function guardarUsuario(guardarUsuarioRequest $request)
   {
   	$x =$request->input('x');
   	$id =$request->input('id');
   switch ($x) {
    case 0:
         DB::table('usuario')
            ->where('id_usu', $id)
            ->update([
               'ci_usu' => $request->input('ci_usu'),
               'nom_usu' => $request->input('nom_usu'),
               'app_usu'=>$request->input('app_usu'),
               'apm_usu'=>$request->input('apm_usu'),
               'area'=>$request->input('area'),
               'cel_usu'=>$request->input('cel_usu'),
               'equipo'=>$request->input('equipo'),
               'email_usu'=>$request->input('email'),
               ]);
            return redirect('admin/usuario');
        break;
    case 1:
        $usuario = new Usuario;
         $usuario->ci_usu= $request->input('ci_usu');
         $usuario->nom_usu= $request->input('nom_usu');
         $usuario->app_usu= $request->input('app_usu');
         $usuario->apm_usu= $request->input('apm_usu');
         $usuario->area= $request->input('area');
         $usuario->cel_usu= $request->input('cel_usu');
         $usuario->equipo= $request->input('equipo');
         $usuario->email_usu= $request->input('email');
         $usuario->save();
         return redirect('crear/usuario');
         break;
        
}
   		
  
   }
   public function administrarUsuario()
   {
   	$usuario = DB::table('usuario')->select()->get();
   	return View::make('usuarios.administrarUsuario',array('usuario'=>$usuario));
   }

   public function modificarUsuario($id )
   {
   	$area = DB::table('area')->select('nom_are', 'id_are')->get();
   	$equipo = DB::table('equipo')->select('id_equ', 'nom_equ','ip_equ')->where('dis_equ', '=', 1)->get();
   	$usuario = DB::table('usuario')->where('id_usu', $id)->first();
   	return View::make('usuarios.modificarUsuario',array('area'=>$area,'equipo'=>$equipo,'usuario'=>$usuario));
   }

   public function eliminarUsuario($id)
   {
   	DB::table('usuario')->where('id_usu', '=', $id)->delete();
   	return redirect('admin/usuario'); 
   }

   public function porNombre(uporNombreRequest $request)
   {
    $nombre=$request->input('nom_usu');
    $usuario = DB::table('usuario')    
            ->join('area', 'usuario.area', '=', 'area.id_are')
            ->select('usuario.nom_usu','usuario.app_usu','usuario.apm_usu','usuario.ci_usu','usuario.cel_usu','area.nom_are','usuario.email_usu')
            ->where('usuario.nom_usu','like', '%'.$nombre.'%')
            ->get();
   return View::make('usuarios.grillausuario',array('usuario'=>$usuario));
   }
      public function uporArea(uporAreaRequest $request)
   {
    $area=$request->input('area');
    $usuario = DB::table('usuario')    
            ->join('area', 'usuario.area', '=', 'area.id_are')
            ->select('usuario.nom_usu','usuario.app_usu','usuario.apm_usu','usuario.ci_usu','usuario.cel_usu','area.nom_are','usuario.email_usu')
            ->where('usuario.area',$area)
            ->get();
   return View::make('usuarios.grillausuario',array('usuario'=>$usuario));
   }
}
