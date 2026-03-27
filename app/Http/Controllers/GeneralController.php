<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class GeneralController extends Controller
{
    public function reportes(){

        return view('reportes.index');
    }

    public function admin_usuarios(){

        return view('admin.usuario.index');
    }

     public function admin_empleados(){

        return view('admin.empleados.index');
    }

    public function inv_contenedores(){

        return view('admin.inventario.contenedores.index');
    }

    public function repartos_registro(){

        return view('admin.repartos.registro');
    }

    

    

}
