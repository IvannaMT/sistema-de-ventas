@extends('layouts.admin')
@section('contenido')
   
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
       <h3> Listado de Ingresos <a href="{{ route('ingreso.create') }}"><button type="button" class="btn btn-success">Nuevo</button></a></h3>
       @include('compras.ingreso.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                   {{-- <th>Id</th>--}}
                    <th>Fecha</th>
                    <th>Proveedor</th>
                    <th>comprobante</th>
                    <th>Impuesto</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </thead>

               @foreach ($ingresos as $ing)
                <tr>
                    {{--<td>{{$ing->idingreos}}</td>--}}
                    <td>{{$ing->fecha_hora}}</td>
                    <td>{{$ing->nombre}}</td>
                    <td>{{$ing->tipo_comprobante.': '.$ing->serie_comprobante.'-'.$ing->num_comprobante}}</td>
                    <td>{{$ing->impuesto}}</td>
                    <td>{{$ing->total}}</td>
                    <td>{{$ing->estado}}</td>

                    <td>
                        <a href="{{route('ingreso.show',$ing->idingreso)}}"><button class="btn btn-primary">Detalles</button></a>
                        <a href="" data-target="#modal-delete-{{$ing->idingreso}}" data-toggle="modal"><button class="btn btn-danger">Anular</button></a>
                    </td>
                </tr>
                @include('compras.ingreso.modal')
                @endforeach
            </table>
        </div>
    {{$ingresos->render()}}
    </div>
</div>
@endsection
     
