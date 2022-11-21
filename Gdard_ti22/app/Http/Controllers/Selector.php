<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;

class Selector extends Controller
{
    
    public function verif(Request $request){
        function listaDB(){
            $listar = DB::select('Select table_name,COLUMN_NAME, DATA_TYPE, CHARACTER_MAXIMUM_LENGTH from INFORMATION_Schema.columns');
            return $listar;       
        }
        $vToken = DB::select('Select remember_token from users');
        //$vToken = (array) $vToken;
        $rToken = $request->input('token');
        $aToken = (array) $rToken;
        foreach ($vToken as $token) {
            //$token = $token["remember_token"];
            if ($token->remember_token == $aToken[0]) {
                return listaDB();
            }
        }
        return 'Token inválido';
    }
}
