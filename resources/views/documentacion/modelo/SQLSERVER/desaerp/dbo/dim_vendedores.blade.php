@extends('layouts.app')


@section('content')


    <div class="container">


        <div class="page-header">
            <h1>DesaERP.dbo.DIM_VENDEDORES </h1>
        </div>


        <!-- Estructura -->
        <div class="card w-75">
            <div class="card-block">
                <h3 class="card-title">Estructura</h3>
                <p class="card-text">

                <div class="table-responsive">

                    <table class="table">
                        <thead>
                            <th>{{ 'Nombre de la columna'   }}</th>
                            <th>{{ 'Descripción'            }}</th>
                            <th>{{ 'Tipo de dato'           }}</th>
                            <th>{{ 'Largo'                  }}</th>
                            <th>{{ 'Acepta nulos'           }}</th>
                        </thead>
                       <tbody>

                       <tr><td>idempresa</td><td>-</td><td>int</td><td>4</td><td>no</td></tr>
                       <tr><td>idvendedor</td><td>primaryKey</td><td>int</td><td>4</td><td>no</td></tr>
                       <tr><td>nombre</td><td>-</td><td>varchar</td><td>50</td><td>no</td></tr>
                       <tr><td>idruta</td><td>-</td><td>int</td><td>4</td><td>yes</td></tr>
                       <tr><td>idcallcenter</td><td>-</td><td>int</td><td>4</td><td>yes</td></tr>
                       <tr><td>idlocal</td><td>-</td><td>int</td><td>4</td><td>yes</td></tr>
                       <tr><td>idlocal1</td><td>-</td><td>int</td><td>4</td><td>yes</td></tr>
                       <tr><td>idbodega</td><td>-</td><td>int</td><td>4</td><td>yes</td></tr>
                       <tr><td>idgestor</td><td>-</td><td>int</td><td>4</td><td>yes</td></tr>
                       <tr><td>email</td><td>-</td><td>varchar</td><td>40</td><td>yes</td></tr>
                       <tr><td>email_supervision</td><td>-</td><td>varchar</td><td>40</td><td>yes</td></tr>
                       <tr><td>email_supervision2</td><td>-</td><td>varchar</td><td>40</td><td>yes</td></tr>
                       <tr><td>email_supervision3</td><td>-</td><td>varchar</td><td>40</td><td>yes</td></tr>
                       <tr><td>idgrupoventa</td><td>-</td><td>numeric</td><td>5</td><td>yes</td></tr>
                       <tr><td>idmgrupoventa</td><td>-</td><td>numeric</td><td>5</td><td>yes</td></tr>
                       <tr><td>sw_palmvigente</td><td>-</td><td>varchar</td><td>1</td><td>yes</td></tr>
                       <tr><td>sw_vigente</td><td>-</td><td>varchar</td><td>1</td><td>yes</td></tr>
                       <tr><td>sw_porfolio1</td><td>-</td><td>varchar</td><td>1</td><td>yes</td></tr>
                       <tr><td>sw_porfolio2</td><td>-</td><td>varchar</td><td>1</td><td>yes</td></tr>
                       <tr><td>psw_pedidos</td><td>-</td><td>varchar</td><td>15</td><td>yes</td></tr>
                       <tr><td>psw_avance</td><td>-</td><td>varchar</td><td>15</td><td>yes</td></tr>
                       <tr><td>usuario</td><td>-</td><td>varchar</td><td>40</td><td>yes</td></tr>
                       <tr><td>usuariodesaerp</td><td>-</td><td>varchar</td><td>20</td><td>yes</td></tr>
                       <tr><td>idunicosto</td><td>-</td><td>int</td><td>4</td><td>yes</td></tr>
                       <tr><td>ordenimprime</td><td>-</td><td>int</td><td>4</td><td>yes</td></tr>
                       <tr><td>idvendedor_sap</td><td>-</td><td>int</td><td>4</td><td>yes</td></tr>
                       <tr><td>pedido_minimo</td><td>-</td><td>varchar</td><td>1</td><td>yes</td></tr>
                       <tr><td>base_sueldo</td><td>-</td><td>numeric</td><td>9</td><td>yes</td></tr>
                       <tr><td>sbp_sueldo</td><td>-</td><td>numeric</td><td>9</td><td>yes</td></tr>

                       </tbody>

                    </table>

                </div>

                </p>
            </div>
        </div>
        <!-- #Estructura -->



        <!-- contenido -->
        <div class="card w-75">
            <div class="card-block">
                <h3 class="card-title">Contenido</h3>
                <p class="card-text">

                    <div class="table-responsive">
                    <form action="{{ url("dim_vendedores") }}" method="post">
                        {{ csrf_field() }}
                        <table class="table table-striped">

                            <thead>
                            <tr>
                                <th>{{ 'idempresa			'}}</th>
                                <th>{{ 'idvendedor          '}}</th>
                                <th>{{ 'nombre              '}}</th>
                                <th>{{ 'idruta              '}}</th>
                                <th>{{ 'idcallcenter        '}}</th>
                                <th>{{ 'idlocal             '}}</th>
                                <th>{{ 'idlocal1            '}}</th>
                                <th>{{ 'idbodega            '}}</th>
                                <th>{{ 'idgestor            '}}</th>
                                <th>{{ 'email               '}}</th>
                                <th>{{ 'email_supervision   '}}</th>
                                <th>{{ 'email_supervision2  '}}</th>
                                <th>{{ 'email_supervision3  '}}</th>
                                <th>{{ 'idgrupoventa        '}}</th>
                                <th>{{ 'idmgrupoventa       '}}</th>
                                <th>{{ 'sw_palmvigente      '}}</th>
                                <th>{{ 'sw_vigente          '}}</th>
                                <th>{{ 'sw_porfolio1        '}}</th>
                                <th>{{ 'sw_porfolio2        '}}</th>
                                <th>{{ 'psw_pedidos         '}}</th>
                                <th>{{ 'psw_avance          '}}</th>
                                <th>{{ 'usuario             '}}</th>
                                <th>{{ 'usuariodesaerp      '}}</th>
                                <th>{{ 'idunicosto          '}}</th>
                                <th>{{ 'ordenimprime        '}}</th>
                                <th>{{ 'idvendedor_sap      '}}</th>
                                <th>{{ 'pedido_minimo       '}}</th>
                                <th>{{ 'base_sueldo         '}}</th>
                                <th>{{ 'sbp_sueldo          '}}</th>
                                <th>{{ 'ACCION              '}}</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="idempresa" >           </td>
                                <td><input type="text" name="idvendedor" >         	</td>
                                <td><input type="text" name="nombre" >             	</td>
                                <td><input type="text" name="idruta" >             	</td>
                                <td><input type="text" name="idcallcenter" >       	</td>
                                <td><input type="text" name="idlocal" >            	</td>
                                <td><input type="text" name="idlocal1" >           	</td>
                                <td><input type="text" name="idbodega" >           	</td>
                                <td><input type="text" name="idgestor" >           	</td>
                                <td><input type="text" name="email" >              	</td>
                                <td><input type="text" name="email_supervision" >  	</td>
                                <td><input type="text" name="email_supervision2" > 	</td>
                                <td><input type="text" name="email_supervision3" >	</td>
                                <td><input type="text" name="idgrupoventa" >       	</td>
                                <td><input type="text" name="idmgrupoventa" >      	</td>
                                <td><input type="text" name="sw_palmvigente" >     	</td>
                                <td><input type="text" name="sw_vigente" >         	</td>
                                <td><input type="text" name="sw_porfolio1" >       	</td>
                                <td><input type="text" name="sw_porfolio2" >       	</td>
                                <td><input type="text" name="psw_pedidos" >        	</td>
                                <td><input type="text" name="psw_avance" >         	</td>
                                <td><input type="text" name="usuario " >           	</td>
                                <td><input type="text" name="usuariodesaerp" >     	</td>
                                <td><input type="text" name="idunicosto" >         	</td>
                                <td><input type="text" name="ordenimprime" >       	</td>
                                <td><input type="text" name="idvendedor_sap" >     	</td>
                                <td><input type="text" name="pedido_minimo" >      	</td>
                                <td><input type="text" name="base_sueldo" >        	</td>
                                <td><input type="text" name="sbp_sueldo" >         	</td>
                                <td> <button type="submit" class="btn btn-primary ">{{ 'Buscar' }}</button>    </td>
                            </tr>

                            </thead>

                            <tbody>

                            @foreach( $vendedores as $vendedor )

                                <tr>
                                    <td>{{  $vendedor->idempresa		   }}</td>
                                    <td>{{  $vendedor->idvendedor          }}</td>
                                    <td>{{  $vendedor->nombre              }}</td>
                                    <td>{{  $vendedor->idruta              }}</td>
                                    <td>{{  $vendedor->idcallcenter        }}</td>
                                    <td>{{  $vendedor->idlocal             }}</td>
                                    <td>{{  $vendedor->idlocal1            }}</td>
                                    <td>{{  $vendedor->idbodega            }}</td>
                                    <td>{{  $vendedor->idgestor            }}</td>
                                    <td>{{  $vendedor->email               }}</td>
                                    <td>{{  $vendedor->email_supervision   }}</td>
                                    <td>{{  $vendedor->email_supervision2  }}</td>
                                    <td>{{  $vendedor->email_supervision3  }}</td>
                                    <td>{{  $vendedor->idgrupoventa        }}</td>
                                    <td>{{  $vendedor->idmgrupoventa       }}</td>
                                    <td>{{  $vendedor->sw_palmvigente      }}</td>
                                    <td>{{  $vendedor->sw_vigente          }}</td>
                                    <td>{{  $vendedor->sw_porfolio1        }}</td>
                                    <td>{{  $vendedor->sw_porfolio2        }}</td>
                                    <td>{{  $vendedor->psw_pedidos         }}</td>
                                    <td>{{  $vendedor->psw_avance          }}</td>
                                    <td>{{  $vendedor->usuario             }}</td>
                                    <td>{{  $vendedor->usuariodesaerp      }}</td>
                                    <td>{{  $vendedor->idunicosto          }}</td>
                                    <td>{{  $vendedor->ordenimprime        }}</td>
                                    <td>{{  $vendedor->idvendedor_sap      }}</td>
                                    <td>{{  $vendedor->pedido_minimo       }}</td>
                                    <td>{{  $vendedor->base_sueldo         }}</td>
                                    <td>{{  $vendedor->sbp_sueldo          }}</td>
                                    <td>{{  $vendedor->ACCION              }}</td>
                                </tr>

                            @endforeach

                            <tr>
                                <th>{{ 'idempresa			'}}</th>
                                <th>{{ 'idvendedor          '}}</th>
                                <th>{{ 'nombre              '}}</th>
                                <th>{{ 'idruta              '}}</th>
                                <th>{{ 'idcallcenter        '}}</th>
                                <th>{{ 'idlocal             '}}</th>
                                <th>{{ 'idlocal1            '}}</th>
                                <th>{{ 'idbodega            '}}</th>
                                <th>{{ 'idgestor            '}}</th>
                                <th>{{ 'email               '}}</th>
                                <th>{{ 'email_supervision   '}}</th>
                                <th>{{ 'email_supervision2  '}}</th>
                                <th>{{ 'email_supervision3  '}}</th>
                                <th>{{ 'idgrupoventa        '}}</th>
                                <th>{{ 'idmgrupoventa       '}}</th>
                                <th>{{ 'sw_palmvigente      '}}</th>
                                <th>{{ 'sw_vigente          '}}</th>
                                <th>{{ 'sw_porfolio1        '}}</th>
                                <th>{{ 'sw_porfolio2        '}}</th>
                                <th>{{ 'psw_pedidos         '}}</th>
                                <th>{{ 'psw_avance          '}}</th>
                                <th>{{ 'usuario             '}}</th>
                                <th>{{ 'usuariodesaerp      '}}</th>
                                <th>{{ 'idunicosto          '}}</th>
                                <th>{{ 'ordenimprime        '}}</th>
                                <th>{{ 'idvendedor_sap      '}}</th>
                                <th>{{ 'pedido_minimo       '}}</th>
                                <th>{{ 'base_sueldo         '}}</th>
                                <th>{{ 'sbp_sueldo          '}}</th>
                                <th>{{ 'ACCION              '}}</th>
                            </tr>

                            </tbody>

                        </table>
                    </form>


                       @if(!$buscar)
                           {{ $vendedores->links() }}
                       @endif
                    </div>

                </p>
            </div>
        </div>
        <!-- #Contenido -->












    </div>











@endsection