<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function methodDelete($api,$tabla,$columns,$valor){
            function paremeters($columns,$values){  
                $dato = '';
                $cont = 0;
                foreach ($values as $value ) {
                    if (sizeof($value)== $cont) {
                        if (is_string($value)) {
                            $dato = $dato.$columns[$cont-1]."='".$value."'" ;
                        }
                        else {
                            $dato = $dato.$columns[$cont-1]."=".$value;
                        }
                    }
                    else {
                        echo("error");
                    }
                }    
            }
            return $dato;
        $columns=explode("/",$columns);
        $valor = explode("/",$values);
        $dato = parameters($value,$columns);
        $query = DB::delete('delete from '.$tabla.' where '.$dato);
        return $query;
    }
}
