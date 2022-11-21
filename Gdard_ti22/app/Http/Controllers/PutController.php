<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PutController extends Controller
{
    public function methodPut($api, $tabla, $columnas, $parametro, $condicion, $valor){
        function parameters($parametros, $columnas){
            $datos = '';
            $cont = 0;
                foreach($parametros as $parametro){
                    $cont++;
                if (sizeof($parametros)==$cont){
                        if(is_string($parametro)){
                        $datos = $datos.$columnas[$cont-1]."='".$parametro."'";                      
                        }
                        else{
                            $datos = $datos.$columnas[$cont-1]."=".$parametro;  
                        }
                }
                else{
                        if(is_string($parametro)){
                            $datos = $datos.$columnas[$cont-1]."='".$parametro."',";                         
                        }
                        else{
                            $datos = $datos.$columnas[$cont-1]."=".$parametro.",";  
                        }
                }           
                }
                return $datos;
            }
        $parametro = explode("/",$parametro);
        $columnas = explode("/", $columnas);
        $datos = parameters($parametro,$columnas);
        $query = DB::update('update '.$tabla.' set ' .$datos.' where '.$condicion.'='.$valor);
        return $query;
    }
}
