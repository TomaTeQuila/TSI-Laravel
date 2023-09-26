<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   {{-- Navbar --}}
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark @if(Route::current()->getName()=='hub.register' || Route::current()->getName()=='hub.login') d-none @endif">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link" href="">
                    Inicio
                </a>
            </li>
          </li>
          <li class="nav-item @if(Gate::allows('usuario-login')) d-none @endif">
              <a class="nav-link" href="{{route('hub.register')}}">
                  <i class="material-symbols-outlined" style="vertical-align: -6px;">person_add</i>
                  Registrarse
              </a>
          </li>
          <li class="nav-item @if(Gate::allows('usuario-login')) d-none @endif">
              <a class="nav-link" href="{{route('hub.login')}}">
                  <i class="material-symbols-outlined" style="vertical-align: -6px;">login</i>
                  Iniciar Sesion
              </a>
          </li>
          <li class="nav-item @if(Gate::denies('usuario-login')) d-none @endif">
              <a class="nav-link" href="{{route('usuario.logout')}}">
                  <i class="material-symbols-outlined" style="vertical-align: -6px;">logout</i>
                  Cerrar sesion
              </a>
          </li>
      </div>
    </div>
  </nav>



   {{-- Body Page --}}
   <div class="container-fluid">
       @yield('main-content')
   </div>
    


    {{-- Bootstrap Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>