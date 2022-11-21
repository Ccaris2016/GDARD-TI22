<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
public function methodPost($api,$tabla,$parametro){
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
        $parametro = explode("/",$parametro);
        $columns = parameters($parametro);
        $query = DB::insert('insert into '.$tabla.' values ('.$columns.');');
        return $query;   
    } 
}

