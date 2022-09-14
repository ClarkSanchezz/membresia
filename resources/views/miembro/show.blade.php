
@extends('tema.app')

@section('title','Miembro')

@section('contenido')
        <h3> 
           <i>{{ $miembro -> nombre }}</i>
        </h3>
        <ul>
            <li>
                Nombre: <strong>{{ $miembro->nombre}}</strong>
            </li>
            <li>
                Apellido Paterno: <strong>{{ $miembro->apellido1 }}</strong>
            </li>
            <li>
                Apellido Materno: <strong>{{ $miembro->apellido2 }}</strong>
            </li>
            <li>
                Fecha de Nacimiento: <strong>{{ $miembro->fecha_nac->format('d-m-Y')  }}</strong>
            </li>
            <li>
                Estado: <strong>{{ $miembro->estado() }}</strong>
            </li>
            <li>
                Ministerio que desempeña: <strong>{{ $miembro->ministerio}}</strong>
            </li>
        </ul>
        <hr>
        <div clas="row">
            <div class="col-sm-12 mb-2">
                <form action="{{ route('miembro.destroy', $miembro) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm" type="submit">
                    Borrar
                </button>
                </form>
            </div>
        </div>
@endsection