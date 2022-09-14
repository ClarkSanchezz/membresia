
@extends('tema.app')

@section('title','Editar miembro')

@section('contenido')
        <h3> 
            Editar Miembro <i>{{ $miembro -> nombre }}</i>
        </h3>
        <form action = "{{route('miembro.update', $miembro )}}" method="POST">
           @method('put')
            <x-miembro-form-body :miembro="$miembro"/> 
          
        </form>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif
@endsection