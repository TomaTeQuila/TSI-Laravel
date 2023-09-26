@extends('templates.template')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            @if ($errors->any())
                <div class="alert alert-warning">
                    <p>Error!</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <p>• {{ $error }}</p>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">Formulario de Registro</div>
                <div class="card-body">
                    <form method="POST" action="{{route('hub.store')}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">Usuario</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="" autocomplete="user">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="" autocomplete="nombre" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="apellido" class="col-md-4 col-form-label text-md-end">Apellido</label>
                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control" name="apellido" value="" autocomplete="apellido">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password1" class="col-md-4 col-form-label text-md-end">Contraseña</label>
                            <div class="col-md-6">
                                <input id="password1" type="password" class="form-control" name="password1" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password2" class="col-md-4 col-form-label text-md-end">Confirmar contraseña</label>
                            <div class="col-md-6">
                                <input id="password2" type="password" class="form-control" name="password2" autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                                <a type="" class="btn btn-secondary" href="{{route('hub.index')}}">
                                    Volver
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection