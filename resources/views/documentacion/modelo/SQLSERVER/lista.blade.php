@extends('layouts.app')


@section('content')


    <div class="container">

        <!-- DIM_VENDEDORES -->
        <div class="card w-75">
            <div class="card-block">
                <h3 class="card-title">DIM_VENDEDORES</h3>
                <p class="card-text">Descripción completa: DesaERP.dbo.DIM_VENDEDORES</p>
                <p class="card-text">Contiene los datos de vendedores del sistema Palm</p>
                <a href="{{ route('dim_vendedores') }}" class="btn btn-primary">Ver detalle</a>
            </div>
        </div>
        <!-- #DIM_VENDEDORES -->

    </div>



@endsection