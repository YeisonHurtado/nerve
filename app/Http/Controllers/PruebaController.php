<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    //
    public function view(Request $request)
    {   
        $datos = array();
        $i = 0;
        $nombre = "";
        foreach ($request->get('nombre') as $key => $value) {
            $datos['nombre'][$i] = $value;
            $i++;
        }
        foreach ($datos as $key => $value) {
            if ($key == 0) {
                $nombre = $value;
            }
        }

        return response()->json($datos);
    }
}
