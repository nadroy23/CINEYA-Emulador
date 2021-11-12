@extends('layouts.app')

@section('template_title')
    {{ $pelicula->name ?? 'Show Pelicula' }}
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detallas de la Pelicula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('peliculas.index') }}"> Cerrar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $pelicula->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $pelicula->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $pelicula->categoria->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pelicula->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
