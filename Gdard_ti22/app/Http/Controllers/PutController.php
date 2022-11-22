<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PutController extends Controller
{
    public function methodPut(Request $request,$api, $tabla, $columnas, $parametro, $condicion, $valor){
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
            function put($tabla, $columnas, $parametro, $condicion, $valor){
                $parametro = explode("/",$parametro);
                $columnas = explode("/", $columnas);
                $datos = parameters($parametro,$columnas);
                $query = DB::update('update '.$tabla.' set ' .$datos.' where '.$condicion.'='.$valor);
                return $query;
            }
            $vToken = DB::select('Select remember_token from users');
            $rToken = $request->input('token');
            $aToken = (array) $rToken;
            foreach ($vToken as $token) {
                if ($token->remember_token == $aToken[0]) {
                    return put($tabla, $columnas, $parametro, $condicion, $valor);
                }
            }
            return 'Token inválido';
    }
}
