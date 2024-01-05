<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pensionado;

class PensionadoController extends Controller
{
    // HOME

    public function index(){

        return view('home');
    }

    // BUSCADOR

    public function search(Request $request){

        $search_text = $request->get('query');

        $pensionados = Pensionado::where('cedula','LIKE', '%'.$search_text.'%')->get();

            if ($pensionados->isEmpty()) {
                
                return redirect()->back()->with('message', 'No se encontraron resultados para la búsqueda.');
            }

        return view('show',compact('pensionados'));
    }

    // CREAR NUEVOS CIUDADANOS - VISTA

    public function create(){

        return view('create');
    }

    // FORMULARIO NUEVOS CIUDADANOS

    public function upload(Request $request){

        $new_ciudadano                  = new Pensionado;
        $new_ciudadano->apellido        = strtoupper($request->apellido);
        $new_ciudadano->nombre          = strtoupper($request->nombre);
        $new_ciudadano->cedula          = $request->cedula;
        $new_ciudadano->sexo            = $request->sexo;
        $new_ciudadano->estado          = $request->estado;
        $new_ciudadano->nacimiento      = $request->nacimiento;
        $new_ciudadano->fallecimiento   = $request->fallecimiento;

        if (Pensionado::where('cedula', $request->cedula)->exists()) {

            return redirect()->back()->with('message', 'Esta cédula ya está registrada');
        }
        else {

            $new_ciudadano->save();

            return redirect()->back()->with('success', 'Ciudadano registrado con éxito');
        }
    }

    // ACTUALIZAR INFORMACIÓN CIUDADANOS - VISTA

    public function update($id){

        $pensionados = Pensionado::find($id);

        return view('update', compact('pensionados'));
    }

    // FORMULARIO ACTUALIZACIÓN INFORMACIÓN CIUDADANOS

    public function edit(Request $request, $id){        

        $pensionado                 = Pensionado::find($id);
        $pensionado->apellido       = strtoupper($request->apellido);
        $pensionado->nombre         = strtoupper($request->nombre);
        $pensionado->cedula;
        $pensionado->sexo           = $request->sexo;
        $pensionado->estado         = $request->estado;
        $pensionado->nacimiento     = $request->nacimiento;
        $pensionado->fallecimiento  = $request->fallecimiento;

        $pensionado->save();

        return redirect()->back()->with('success', 'Ciudadano actualizado con éxito');
    }
}
