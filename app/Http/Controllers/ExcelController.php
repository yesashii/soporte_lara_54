<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FCA_FORECASTPRO;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

use Validator;
//use Illuminate\Contracts\Validation\Validator;


class ExcelController extends Controller
{
    //


    /**
     * Muestra la ventana de carga de forecast
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        return view('utilidades.cargarForecast');

    }


    /**
     * guarda un archivo en nuestro directorio local.
     *
     * @return Response
     */
    public function save(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required',
        ],$messages = [
            'file.required' => trans('No se ha seleccionado ningún archivo'),
        ]);

        if ($validator->fails())
        {
            return redirect('forecast')->withErrors($validator)->withInput();
        }


        $file = $request->file('file'); //obtenemos el campo file definido en el formulario

        $nombre = $file->getClientOriginalName();  //obtenemos el nombre del archivo

        if( substr( $nombre, -4 ) != 'xlsx' )
        {
            $mensaje_e = 'La extención del archivo debe ser .xlsx';
            return redirect('forecast')->withErrors(array('message' => $mensaje_e))->withInput();
        }

        Storage::disk('local')->put( $nombre,  File::get($file) );//indicamos que queremos guardar un nuevo archivo en el disco local

        $this->importForecast($nombre);

        return back();
    }


    /**
     *
     * importa el archivo excel a la bace de datos
     *
     *
     * @param $archivo
     */
    public function importForecast( $archivo )
    {
        Excel::filter('chunk')->load('storage/app/'.$archivo)->chunk(10000, function($results){



            foreach ($results as $row) {

                $existe = FCA_FORECASTPRO::existeRegistro( $row->a1,$row->a2,$row->a3,$row->a4,$row->a5 );

                if( !$existe and isset($row->a1) )
                {

                    FCA_FORECASTPRO::insertarFila( $row );

                }
            }
        });


        Storage::delete($archivo);

    }



    public function eliminar()
    {
        Storage::delete('FCA2.xlsx');
    }







}
