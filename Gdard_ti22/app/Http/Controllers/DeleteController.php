<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function methodDelete($api,$tabla,$columns,$parametros){ 
        function FunctionName($parametro)
        {
            if(is_string($parametro)){
                $parametro = "'". $parametro . "'";
            }
            return $parametro ;
        }
        $dato  = FunctionName($parametros) ;
        $query = DB::delete('delete from '.$tabla.' where '.$columns.' = '.$dato);
        return $query;
    }
}