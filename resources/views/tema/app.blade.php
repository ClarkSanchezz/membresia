<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
@livewireStyles
</head>
<body class="bg-light">
    <div class ="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12">
                <h1>Miembros Torre Fuerte</h1>
            </div>
            <div class="col-sm-12">
                <a href="{{route('miembro.create')}}" class="btn btn-success">Registrar nuevo miembro</a>
                <a href="{{ route('miembro.index') }}" class="btn btn-warning">Listar miembros</a>
                <a href="{{ route('miembro.home') }}" class="btn btn-secondary">Inicio</a>
            </div>
            <div class="col-sm-12">
                @yield('contenido')
            </div>
        </div>
    </div>
    @livewireScripts
    <!--<h1> Dioni </h1> -->
</body>
</html>