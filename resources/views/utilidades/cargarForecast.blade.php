@extends('layouts.app')


@section('content')

     <div class="container">


         <div class="container">
             @if( count($errors) > 0 )
                 @foreach( $errors->all() as $error )
                     <p class="alert alert-danger">{{ $error }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                 @endforeach
             @endif
         </div><!-- fin mensajes de error -->


         <div class="container">
             @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                 @if(Session::has('alert-' . $msg))

                     <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                 @endif
             @endforeach
         </div>
         <!-- fin mensajes de flash -->


        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Forecast uploader</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ url('cargar/forecast') }}" accept-charset="UTF-8" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nuevo Archivo</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="file" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection