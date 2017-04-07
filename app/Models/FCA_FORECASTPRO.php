<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Collections\CellCollection;

class FCA_FORECASTPRO extends Model
{
    //

    private static $stable          = 'DesaERP.dbo.prueba_FCA_FORECASTPRO';
    protected   $table              = 'DesaERP.dbo.prueba_FCA_FORECASTPRO';
    protected   $primaryKey         =  [ 'idperiodo', 'idsucursal', 'idgestor', 'idvendedor', 'idsku' ];
    public      $incrementing       = false;


    public      $timestamps         = false;


    /**
     * Verifica si el dato que se esta insertando ya existe.
     *
     *
     * @param $idperiodo
     * @param $idsucursal
     * @param $idgestor
     * @param $idvendedor
     * @param $idsku
     * @return bool
     */
    public static function existeRegistro( $idperiodo, $idsucursal, $idgestor, $idvendedor, $idsku )
    {


        $registros = DB::table( self::$stable )
            ->where('idperiodo',$idperiodo)
            ->where('idsucursal',$idsucursal)
            ->where('idgestor',$idgestor)
            ->where('idvendedor',$idvendedor)
            ->where('idsku',$idsku)
            ->count();

        return !! $registros>0? true:false;

    }


    /**
     * recibe los datos cargados del archivo excel y los ingresa a la tabla.
     *
     * @param CellCollection $datos
     */
    public static function insertarFila( CellCollection  $datos )
    {

        DB::table('DesaERP.dbo.prueba_FCA_FORECASTPRO')->insert(
            [
                'idperiodo'     => $datos->a1,
                'idsucursal'    => $datos->a2,
                'idgestor'      => $datos->a3,
                'idvendedor'    => $datos->a4,
                'idsku'         => (string)$datos->a5,
                'forecast1_spl' => round($datos->a6 ,2),
                'forecast1_mkt' => round($datos->a7 ,2),
                'forecast1_suc' => round($datos->a8 ,2),
                'forecast1_ges' => round($datos->a9 ,2),
                'forecast2_spl' => round($datos->a10,2),
                'forecast2_mkt' => round($datos->a11,2),
                'forecast2_suc' => round($datos->a12,2),
                'forecast2_ges' => round($datos->a13,2),
                'forecast3_spl' => round($datos->a14,2),
                'forecast3_mkt' => round($datos->a15,2),
                'forecast3_suc' => round($datos->a16,2),
                'forecast3_ges' => round($datos->a17,2),
                'forecast4_spl' => round($datos->a18,2),
                'forecast4_mkt' => round($datos->a19,2),
                'forecast4_suc' => round($datos->a20,2),
                'forecast4_ges' => round($datos->a21,2),
            ]);

    }

}
