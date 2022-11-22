<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GetController extends Controller
{
    public function methodGet(Request $requestt,$api,$tabla,$parametro)
    {
        function parameters($parametros){
            $columns = '';
            $cont = 0;
            foreach($parametros as $parametro){
                $cont++;
                if (sizeof($parametros) == $cont){
                    $columns = $columns.$parametro;
                }
                else{
                    $columns = $columns.$parametro.',';
                }
            }
            return $columns;
        }
        function getcontroll($tabla,$parametro){
            $parametro = explode("/",$parametro);
            $columns = parameters($parametro);
            $query = DB::select('select '.$columns.' from '.$tabla);
            return $query;
        }

        $vToken = DB::select('Select remember_token from users');
        $rToken = $requestt->input('token');
        $aToken = (array) $rToken;
        foreach ($vToken as $token) {
            if ($token->remember_token == $aToken[0]) {
                return getcontroll ($tabla,$parametro);
            }
        }
        return 'Token inválido';
        }
}
