<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\FCA_FORECASTPRO;

class ImportController extends Controller
{
    //


    public function import()
    {
        Excel::filter('chunk')->load('FCA2.xlsx')->chunk(11000, function($results){

            foreach ($results as $row) {

                $existe = FCA_FORECASTPRO::existeRegistro( $row->a1,$row->a2,$row->a3,$row->a4,$row->a5 );

                if( !$existe )
                {

                    FCA_FORECASTPRO::insertarFila( $row );

                }
            }
        });

        return FCA_FORECASTPRO::count();
        //return FCA_FORECASTPRO::all();
    }




}
