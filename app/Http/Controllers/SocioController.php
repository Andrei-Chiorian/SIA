<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use App\Models\Persona;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    public function show(Request $request)
    {
        $socio = Socio::where('Cod_Socios', $request->cod)->get();
        if(count($socio)){           
            $socio = $socio[0];
        }
        if(isset($socio->Cod_Socios)){                                    
        return view('socio.socioShow',['socio'=>$socio]);            
        }
        
        return view('socio.socioShow');

    }

    public function create()
   {
      return view('socio.socioShow');
   }

    public function socios(Request $request)
    {
        $socios = Socio::all();
        if(isset($request->mensaje)){        
            return view('socio.socio')->with(['socios'=>$socios, 'mensaje'=>$request->mensaje]);
        }
        return view('socio.socio')->with(['socios'=>$socios]);
    }

    public function find(Request $request)
    {
        return redirect()->route('socio.show', ['cod'=> $request->cod]);    
    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function destroy(Request $request)
    {
        $socio = Socio::where('Cod_Socios', $request->cod);
        
        if(count($socio->get())) 
        {            
            $socio->delete();            
            return redirect()->route('socios', ['mensaje'=>'Socio eliminado correctamente']);
        }
        return back();   
    }
}
