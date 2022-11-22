<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function methodDelete(Request $request,$api,$tabla,$columns,$parametros){ 
        function FunctionName($parametro)
        {
            if(is_string($parametro)){
                $parametro = "'". $parametro . "'";
            }
            return $parametro;
        }
        function Callquery($api,$tabla,$columns,$parametros){
            $dato  = FunctionName($parametros) ;
            $query = DB::delete('delete from '.$tabla.' where '.$columns.' = '.$dato);
            return $query;
        }

        $vToken = DB::select('Select remember_token from users');
        //$vToken = (array) $vToken;
        $rToken = $request->input('token');
        $aToken = (array) $rToken;
        foreach ($vToken as $token) {
            //$token = $token["remember_token"];
            if ($token->remember_token == $aToken[0]) {
                return Callquery($api,$tabla,$columns,$parametros);
            }
        }
        return 'Token inválido';
    }
}