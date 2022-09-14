@csrf 
<div class ="row">
    <div class="col-sm-12">
        <label for="InputNombre" class="form-label">* Nombre del miembro</label>
        <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="Nombre" value="{{old('nombre', $miembro->nombre)}}">
    </div>
    <div class="col-sm-6">
        <label for="InputApellido1" class="form-label">* Apellido Paterno</label>
        <input type="text" name="apellido1" id="InputApellido1" class="form-control" placeholder="Apellido1" value="{{old('apellido1', $miembro->apellido1)}}">
    </div>
    <div class="col-sm-6">
        <label for="InputApellido2" class="form-label">* Apellido Materno</label>
        <input type="text" name="apellido2" id="InputApellido2" class="form-control" placeholder="Apellido2" value="{{old('apellido2', $miembro->apellido2)}}">
        </div>
     <div class="col-sm-6">
        <label for ="InputFecha_nac" class="form_label">* Feha de Naciemiento</label>
        <input type="date" name="fecha_nac" id="InputFechaNacimiento" class="form-control" value="{{old('fecha_nac', is_null($miembro->fecha_nac) ? '' : $miembro->fecha_nac->format('d-m-Y') )}} ">
    
    </div>
    <!--
    <div class="col-sm-6">
        <label for="InputEstado" class="form-label">* Estado</label>
        <input type="text" name="estado" id="InputEstado" class="form-control" placeholder="Estado" value="{{old('estado')}}">
        </div> 
    -->


  <div class="col-sm-4">
        <label for="SelectEstado" class="form-label">* Estado</label>
        <select name="estado" name="estado" id="SelectEstado" class="form-select">
            @for($x = 0; $x < count($estados); $x++)
                <option value="{{ $x }}" @selected(old('estado', $miembro->estado))>{{ $estados[$x] }}</option>
            @endfor
        </select>  
       
        </div> 

        <div class="col-sm-6">
        <label for="InputMinisterio" class="form-label">* Ministerio que desempeña actualmente</label>
        <input type="text" name="ministerio" id="InputMinisterio" class="form-control" placeholder="Ministerio" value="{{old('ministerio', $miembro->ministerio)}}">
        </div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">
            Guardar </button>
        </div>