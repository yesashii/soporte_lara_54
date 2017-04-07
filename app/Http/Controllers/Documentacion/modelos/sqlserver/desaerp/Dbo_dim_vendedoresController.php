<?php

namespace App\Http\Controllers\Documentacion\modelos\sqlserver\desaerp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sqlserver\desaerp\Dbo_dim_vendedores;

class Dbo_dim_vendedoresController extends Controller
{
    //


    public function index()
    {

        $vendedores = Dbo_dim_vendedores::paginate(5);

        $buscar = false;

        return view('documentacion.modelo.SQLSERVER.desaerp.dbo.dim_vendedores',compact('vendedores','buscar'));
    }

    public function buscar( Request $request )
    {

        //dd($request);
        $vendedores = Dbo_dim_vendedores::buscaVendedor( $request );

        //dd($vendedores);

        $buscar = true;

        return view('documentacion.modelo.SQLSERVER.desaerp.dbo.dim_vendedores',compact('vendedores','buscar'));

    }


}
