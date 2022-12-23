@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Import DPA INEC</h1>
    <a href="https://www.ecuadorencifras.gob.ec/clasificador-geografico-estadistico-dpa/" target="_blank">https://www.ecuadorencifras.gob.ec/clasificador-geografico-estadistico-dpa/</a>
@stop

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cargar DPA</div>

                <div class="card-body">
                    @if(isset($errors) && $errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                        </div>
                    @endif
                    <form action="{{route('dpa.imports.excel.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input class="form-control" type="file" name="import_dpa">
                        <button class="btn btn-primary" type="submit">Importar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

    </script>
@stop
