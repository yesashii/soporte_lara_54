<?php

namespace App\Http\Controllers\Documentacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocmodelosController  extends Controller
{
    //




    public function index()
    {

        return view('documentacion.modelo.SQLSERVER.lista');

    }



}
