<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GetController extends Controller
{
    public function methodGet($api,$tabla,$parametro)
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
        $parametro = explode("/",$parametro);
        $columns = parameters($parametro);
        $query = DB::select('select '.$columns.' from '.$tabla);
        return $query;
    }
}
