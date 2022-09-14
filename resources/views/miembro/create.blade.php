@extends('tema.app')

@section('title','Nuevo miembro')

@section('contenido')
        <h3> 
            Registrar Miembro
        </h3>
        <form action = "{{route('miembro.store')}}" method="POST">
           <x-miembro-form-body/> 
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