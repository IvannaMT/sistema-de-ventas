@extends('layouts.admin')
@section('contenido')
   
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
       <h3> Listado de Proveedores <a href="{{ route('proveedor.create') }}"><button type="button" class="btn btn-success">Nuevo</button></a></h3>
       @include('compras.proveedor.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Tipo doc.</th>
                    <th>Numero doc.</th>
                    <th>Direccion</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Opcion</th>
                </thead>

               @foreach ($personas as $per)
                <tr>
                    <td>{{$per->idpersona}}</td>
                    <td>{{$per->nombre}}</td>
                    <td>{{$per->tipo_documento}}</td>
                    <td>{{$per->num_documento}}</td>
                    <td>{{$per->direccion}}</td>
                    <td>{{$per->telefono}}</td>
                    <td>{{$per->email}}</td>

                    <td>
                        <a href="{{route('proveedor.edit',$per->idpersona)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @include('compras.proveedor.modal')
                @endforeach
            </table>
        </div>
    {{$personas->render()}}
    </div>
</div>
@endsection
     
