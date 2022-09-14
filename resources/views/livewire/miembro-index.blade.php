<div>
    <div class="row">
        <div class="col-sm-9">
            <input type="text" name="" id="" placeholder="Buscar..." class="form-control" wire:model="busqueda">
        </div>
        <div class="col-sm-3">
            <select name="" id="" class="form-select" wire:model ="paginacion">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Apellido Paterno
            </th>
            <th>
                Apellido Materno
            </th>
            <th>
                Fecha de Nacimiento
            </th>
            <th>
                Estado
            </th>
            <th>
                Ministerio que desempeña
            </th>
            <th>
                Opciones
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($miembros as $miembro)
        <tr>
            <td>
                {{ $miembro -> nombre}}
             </td>
             <td>
                {{ $miembro -> apellido1}}
             </td>
             <td>
                {{ $miembro -> apellido2}}
             </td>
             <td>
                {{ $miembro -> fecha_nac->format('d/m/y')}}
             </td>
             <td>
                {{ $miembro -> estado()}}
             </td>
             <td>
                {{ $miembro -> ministerio}}
             </td>
             <td>
                <a href="{{ route('miembro.edit', $miembro) }}" class="btn btn-primary">Editar</a>
                <a href="{{ route('miembro.show', $miembro) }}" class="btn btn-info">Ver</a>
                 <!-- poner en ¨[id, 0, etc] -->
             </td>
        </tr>
        @endforeach
    </tbody>     
    </table>
    {{ $miembros->links() }}
</div>
