<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
public function methodPost(Request $request,$api,$tabla,$parametro){
        function parameters($parametros){
            $columns = '';
            $cont = 0;
            foreach($parametros as $parametro){
                $cont++;
                if (sizeof($parametros) == $cont){
                    if(is_string($parametro)){
                        $columns = $columns."'".$parametro."'";
                    }
                    else{
                        $columns = $columns.$parametro;
                    }
                }
                else{
                    if(is_string($parametro)){
                        $columns = $columns."'".$parametro."',";
                    }
                    else{
                        $columns = $columns.$parametro.',';
                    }
                }
            }
            return $columns;
        }
        function post($api,$tabla,$parametro){
                $parametro = explode("/",$parametro);
                $columns = parameters($parametro);
                $query = DB::insert('insert into '.$tabla.' values ('.$columns.');');
                return $query;
        }
        $vToken = DB::select('Select remember_token from users');
        $rToken = $request->input('token');
        $aToken = (array) $rToken;
        foreach ($vToken as $token) {
        if ($token->remember_token == $aToken[0]) {
                return post($api,$tabla,$parametro);
            }
        }
        return 'Token invalido';
    }
}

