<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use App\Http\Requests\guardarSiniestroRequest;
use App\Http\Requests\generarReporteRequest;
use DB;
use PDF;
use App\Siniestro;
class SiniestroController extends Controller
{
	public function listarUsuarios()
	{
		$siniestro = DB::table('usuario')
            ->join('equipo', 'usuario.equipo', '=', 'equipo.id_equ')
            ->join('area', 'usuario.area', '=', 'area.id_are')
            ->select('usuario.ci_usu','usuario.id_usu','usuario.nom_usu','usuario.app_usu','usuario.apm_usu','area.nom_are','equipo.id_equ','equipo.nom_equ','equipo.ip_equ','equipo.mar_equ','so_equ','equipo.mod_equ')
            ->get();
		return View::make('siniestros.siniestros',array('siniestro'=>$siniestro));
	}
	public function registrarSiniestro($id)
	{
		$siniestro = DB::table('usuario')
            ->join('equipo', 'usuario.equipo', '=', 'equipo.id_equ')
            ->join('area', 'usuario.area', '=', 'area.id_are')
            ->select('usuario.id_usu','usuario.nom_usu','app_usu','apm_usu','equipo.id_equ','equipo.nom_equ','equipo.mar_equ','equipo.mod_equ','equipo.ip_equ','area.id_are','area.nom_are')
            ->where('usuario.id_usu','=',$id)
            ->first(); 
       return View::make('siniestros.registroSiniestro',array('siniestro'=>$siniestro));
	}
	public function guardarSiniestro(guardarSiniestroRequest $request)
	{
		$siniestro = new Siniestro;
		$siniestro->area=$request->input('area');
		$siniestro->usuario=$request->input('usuario');
		$siniestro->equipo=$request->input('equipo');
		$siniestro->fecha=$request->input('fecha');
		$siniestro->observaciones=$request->input('observaciones');
		$siniestro->save();
		return redirect('/');
	}

	public function listarSiniestro()
	{
		$siniestro = DB::table('siniestro')
            ->join('area', 'siniestro.area', '=', 'area.id_are')
            ->join('equipo', 'siniestro.equipo', '=', 'equipo.id_equ')
            ->join('usuario', 'siniestro.usuario', '=', 'usuario.id_usu')
            ->select('usuario.ci_usu','usuario.nom_usu','app_usu','apm_usu','equipo.nom_equ','equipo.mar_equ','equipo.mod_equ','equipo.ip_equ','area.nom_are','siniestro.id_sin')
            ->get(); 
           return View::make('siniestros.listaSiniestro',array('siniestro'=>$siniestro));
	}
		public function listarSiniestros()
	{
		$siniestro = DB::table('siniestro')
            ->join('area', 'siniestro.area', '=', 'area.id_are')
            ->join('equipo', 'siniestro.equipo', '=', 'equipo.id_equ')
            ->join('usuario', 'siniestro.usuario', '=', 'usuario.id_usu')
            ->select('usuario.ci_usu','usuario.nom_usu','app_usu','apm_usu','equipo.nom_equ','equipo.mar_equ','equipo.mod_equ','equipo.ip_equ','area.nom_are','siniestro.id_sin','siniestro.fecha')
            ->get(); 
           return View::make('siniestros.listaSiniestros',array('siniestro'=>$siniestro));
	}

	public function eliminarSiniestro($id)
	{
		DB::table('siniestro')->where('id_sin', $id)->delete();
		return redirect('listar/siniestro');
	}
	public function detalle($id)
	{
	$siniestro = DB::table('siniestro')
            ->join('area', 'siniestro.area', '=', 'area.id_are')
            ->join('equipo', 'siniestro.equipo', '=', 'equipo.id_equ')
            ->join('usuario', 'siniestro.usuario', '=', 'usuario.id_usu')
            ->select('usuario.ci_usu','usuario.nom_usu','app_usu','apm_usu','equipo.nom_equ','equipo.mar_equ','equipo.mod_equ','equipo.cs_equ','area.nom_are','siniestro.observaciones','siniestro.fecha')
            ->where('siniestro.id_sin',$id)
            ->first();	
	$pdf = PDF::setPaper('a4', 'landscape')->setWarnings(false);
    $pdf = PDF::loadView('detalle',array('siniestro'=>$siniestro));
    return $pdf->stream('archivo.pdf');	
	}

	public function reporte($id)
	{

		return View::make('siniestros.reporteSiniestro',array('id'=>$id));
	}
	public function genera(generarReporteRequest $request)
	{
		$id = $request->input('id');
			$siniestro = DB::table('siniestro')
            ->join('area', 'siniestro.area', '=', 'area.id_are')
            ->join('equipo', 'siniestro.equipo', '=', 'equipo.id_equ')
            ->join('usuario', 'siniestro.usuario', '=', 'usuario.id_usu')
            ->select('usuario.ci_usu','usuario.nom_usu','app_usu','apm_usu','equipo.nom_equ','equipo.mar_equ','equipo.mod_equ','equipo.cs_equ','area.nom_are','siniestro.observaciones','siniestro.fecha')
            ->where('siniestro.id_sin',$id)
            ->first();	
		$datos = array('a' => $request->input('a'), 
					   'de' => $request->input('de'), 
					   'cargo' => $request->input('cargo'), 
					   'fecha' => $request->input('fecha'), 
						);
	$pdf = PDF::setPaper('a4', 'landscape')->setWarnings(false);
    $pdf = PDF::loadView('reporte',array('datos'=>$datos,'siniestro'=>$siniestro));
    return $pdf->stream('archivo.pdf');
	}
}
