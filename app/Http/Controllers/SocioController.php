<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Cargo;
use App\Models\Socio;
use App\Models\Persona;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    public function show(Request $request)
    {
        $socio = Socio::where('Cod_Socios', $request->cod)->first(); 

        $cargos = Cargo::all();
        

        if(isset($socio->Cod_Socios)){                                    
        return view('socio.socioShow',['socio'=>$socio, 'cargos'=>$cargos]);            
        }
        
        $personas = Persona::all();
        $clubs = Club::all();

        return view('socio.socioShow',['cargos'=>$cargos, 'personas'=>$personas, 'clubs'=>$clubs]);

    }


    public function create()
   {
        $cargos = Cargo::all();
        $personas = Persona::all();
        $clubs = Club::all();

        return view('socio.socioShow', ['cargos'=>$cargos, 'personas'=>$personas, 'clubs'=>$clubs]);
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



    public function store(Request $request)
    {        
        $request->validate(         
            [
               'codSoc' => 'nullable',
               'codPer'=>'required',
               'codClu'=>'required',
               'fAlta'=>'required',
               'carg'=>'required',
               'cCuo'=>'required',
               'soFu'=>'nullable',
               'fBaj'=>'nullable',
               'moti'=>'nullable'                      
            ]         
        );

        Socio::create([
            'CPer_Socios' => $request->codPer,            
            'CClu_Socios' => $request->codClu,
            'CCuo_Socios' => $request->cCuo,
            'SoFu_Socios' => $request->soFu,
            'FAlt_Socios' => $request->fAlta,
            'Carg_Socios' => $request->carg,
            'FBaj_Socios' => $request->fBaj,
            'Moti_Socios' => $request->moti 
        ]);

        $socio = Socio::all()->last();

        return redirect()->route('socio.show',['cod'=>$socio->Cod_Socios]);

    }



    public function update(Request $request)
    {
        $this->validate($request,         
            [                             
               'fAlta'=>'required',
               'carg'=>'required',
               'cCuo'=>'required',
               'soFu'=>'nullable',
               'fBaj'=>'nullable',
               'moti'=>'nullable'                      
            ]         
        );

        Socio::where('Cod_Socios' , $request->codSoc)->update([
            'CCuo_Socios' => $request->cCuo,
            'SoFu_Socios' => $request->soFu,
            'FAlt_Socios' => $request->fAlta,
            'Carg_Socios' => $request->carg,
            'FBaj_Socios' => $request->fBaj,
            'Moti_Socios' => $request->moti 
         ]);
         
         return redirect()->route('socio.show',['cod'=>$request->codSoc]);
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
