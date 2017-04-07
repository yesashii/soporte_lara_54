<?php

namespace App\Models\sqlserver\desaerp;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Dbo_dim_vendedores extends Model
{
    //

    private static $stable  = 'DesaERP.dbo.DIM_VENDEDORES';
    protected $table        = 'DesaERP.dbo.DIM_VENDEDORES';

    protected $primaryKey   = 'idvendedor';


    /**
     * se usa para el buscador de la tabla
     *
     *
     * @param Request $request
     * @return mixed
     */
    public static function buscaVendedor( $request )
    {
        //dd( self::traePor_idruta($request->idruta)->get() );

        $vendedores = self::traePor_idempresa($request->idempresa)
            ->union( self::traePor_idvendedor($request->idvendedor) )
            ->union( self::traePor_nombre($request->nombre) )
            ->union( self::traePor_idruta($request->idruta) )
            ->get();

        return $vendedores;
    }

    public static function traePor_idempresa( $idempresa )
    {
        return static::where( 'idempresa',$idempresa );
    }

    public static function traePor_idvendedor( $idvendedor )
    {
        return static::where( 'idvendedor',$idvendedor );
    }

    public static function traePor_nombre( $nombre )
    {
        return static::where( 'nombre','like',isset($nombre)?'%'.$nombre.'%':false);
    }

    public static function traePor_idruta( $idruta )
    {
        return static::where( 'idruta',$idruta);
    }

    public static function traePor_idcallcenter( $idcallcenter )
    {
        return static::where( 'idcallcenter','%'.$idcallcenter.'%');
    }

    public static function traePor_idlocal( $idlocal )
    {
        return static::where( 'idlocal','%'.$idlocal.'%');
    }

    public static function traePor_idlocal1( $idlocal1 )
    {
        return static::where( 'idlocal1','%'.$idlocal1.'%');
    }

    public static function traePor_idbodega( $idbodega )
    {
        return static::where( 'idbodega',$idbodega );
    }

    public static function traePor_idgestor( $idgestor )
    {
        return static::where( 'idgestor','%'.$idgestor.'%');
    }

    public static function traePor_email( $email )
    {
        return static::where( 'email','%'.$email.'%');
    }

    public static function traePor_email_supervision( $email_supervision )
    {
        return static::where( 'email_supervision','%'.$email_supervision.'%');
    }

    public static function traePor_email_supervision2( $email_supervision2 )
    {
        return static::where( 'email_supervision2','%'.$email_supervision2.'%');
    }

    public static function traePor_email_supervision3( $email_supervision3 )
    {
        return static::where( 'email_supervision3','%'.$email_supervision3.'%');
    }

    public static function traePor_idgrupoventa( $idgrupoventa )
    {
        return static::where( 'idgrupoventa','%'.$idgrupoventa.'%');
    }

    public static function traePor_idmgrupoventa( $idmgrupoventa )
    {
        return static::where( 'idmgrupoventa','%'.$idmgrupoventa.'%');
    }

    public static function traePor_sw_palmvigente( $sw_palmvigente )
    {
        return static::where( 'sw_palmvigente','%'.$sw_palmvigente.'%');
    }

    public static function traePor_sw_vigente( $sw_vigente )
    {
        return static::where( 'sw_vigente','%'.$sw_vigente.'%');
    }

    public static function traePor_sw_porfolio1( $sw_porfolio1 )
    {
        return static::where( 'sw_porfolio1','%'.$sw_porfolio1.'%');
    }

    public static function traePor_sw_porfolio2( $sw_porfolio2 )
    {
        return static::where( 'sw_porfolio2','%'.$sw_porfolio2.'%');
    }

    public static function traePor_psw_pedidos( $psw_pedidos )
    {
        return static::where( 'psw_pedidos','%'.$psw_pedidos.'%');
    }

    public static function traePor_psw_avance( $psw_avance )
    {
        return static::where( 'psw_avance','%'.$psw_avance.'%');
    }

    public static function traePor_usuario( $usuario )
    {
        return static::where( 'usuario','%'.$usuario.'%');
    }




}
