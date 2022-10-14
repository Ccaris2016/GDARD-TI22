<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Selector extends Controller
{
    public function listaDB(){
        //$name_db=env('DBmod');
        //En esta línea se hace la consulta a la DB para que muestre todas las tablas en formato json, la ruta esta en el archivo web.php
        $listar = DB::select('Select table_name,COLUMN_NAME, DATA_TYPE, CHARACTER_MAXIMUM_LENGTH from INFORMATION_Schema.columns');
        //$listado = [];
        //foreach($listar as $lista){
          //  $listado[] = $lista->$listado;
            return $listar;         
        }

    }

  
