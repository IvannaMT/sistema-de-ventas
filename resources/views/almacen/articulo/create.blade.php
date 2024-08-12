@extends('layouts.admin')
@section('contenido')

 <div class="row">
    <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12">
        <h3>Nueva Articulo</h3>
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

        {!! Form::open(array('url'=>'almacen/articulo','method'=>'POST','autocomplete'=>'off','files'=>'true')) !!}
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
                    <label>Categoria</label>
                    <select name="idcategoria" class="form-control">
                        @foreach ($categorias as $cat)
                            <option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="codigo">Codigo</label>
                    <Input type="text" name="codigo" required value="{{old('codigo')}}" class="form-control" placeholder="codgio del articulo...."></Input>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <Input type="text" name="stock" required value="{{old('stock')}}" class="form-control" placeholder="stock del articulo...."></Input>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <Input type="text" name="descripcion"  value="{{old('descripcion')}}" class="form-control" placeholder="descripion del articulo...."></Input>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <Input type="file" name="imagen"  class="form-control"></Input>
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