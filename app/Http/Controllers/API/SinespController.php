<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use App\API\Sinesp;
use App\Veiculo;

class SinespController extends Controller
{
    
    public function Index(){
        return view("welcome");
    }

    public function ResultadoJSON(){
        return view("resultadojson");
    }
    
    
    public function BuscaCarro(Request $request)
    {
        //dd($request);
        $sinesp = new Sinesp;
        
        try
        {
            //dd($request->Placa);
            $sinesp->buscar($request->Placa);
            
            if($sinesp->existe())
            {
                $sinesp = $sinesp->dados();
            }
            
            $veiculo = new Veiculo($sinesp);
            return view("resultado", compact("veiculo"));
            
        } catch(\Exception $e)
        {
            dd($e);
        }
    }

    public function BuscaCarroJSON(Request $request)
    {
        dd($request);
        $sinesp = new Sinesp;
        
        try
        {
            //dd($request->Placa);
            $sinesp->buscar($request->Placa);
            
            if($sinesp->existe())
            {
                $sinesp = $sinesp->dados();
            }
            
            $veiculo = new Veiculo($sinesp);        
            //return    serialize($veiculo);
            //dd(get_object_vars($veiculo));
            return response()->json(get_object_vars($veiculo));
            
        } catch(\Exception $e)
        {
            dd($e);
        }
    }

    public function BuscaCarroJSONGET($placa)
    {
        //dd($placa);
        $sinesp = new Sinesp;
        
        try
        {
            //dd($request->Placa);
            $sinesp->buscar($placa);
            
            if($sinesp->existe())
            {
                $sinesp = $sinesp->dados();
            }
            
            $veiculo = new Veiculo($sinesp);        
            //return    serialize($veiculo);
            //dd(get_object_vars($veiculo));
            return response()->json(get_object_vars($veiculo));
            
        } catch(\Exception $e)
        {
            dd($e);
        }
    }
}
