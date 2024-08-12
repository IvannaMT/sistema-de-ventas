@extends('layouts.admin')
@section('contenido')

 <div class="row">
    <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12">
        <h3>Nuevo Cliente</h3>
        @if (count($errors)>0)     
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                
                         <li>{{$error}}</li>    
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>

        {!! Form::open(array('url'=>'ventas/cliente','method'=>'POST','autocomplete'=>'off')) !!}
        {!! Form::token() !!}
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <Input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...."></Input>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <Input type="text" name="direccion" required value="{{old('direccion')}}" class="form-control" placeholder="direccion...."></Input>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Documento</label>
                    <select name="tipo_documento" class="form-control">
                            
                        <option value="DNI">DNI</option>
                        <option value="RUC">RUC</option>
                        <option value="PAS">PAS</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="num_documento">Numero del documento</label>
                    <Input type="text" name="num_documento" required value="{{old('num_documento')}}" class="form-control" placeholder="numero del documento...."></Input>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <Input type="text" name="telefono" required value="{{old('telefono')}}" class="form-control" placeholder="telefono...."></Input>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="email">Email</label>
                    <Input type="text" name="email"  value="{{old('email')}}" class="form-control" placeholder="descripion del articulo...."></Input>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <button class="btn btn-primary " type="submit">Guardar</button>
                    <button class="btn btn-danger " type="reset">Cancelar</button>
                </div>
            </div>
        </div>

        {!! Form::close() !!}
@endsection
