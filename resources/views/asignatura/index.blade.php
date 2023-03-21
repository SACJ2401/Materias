Mostrar la lista de Asignaturas

<a href=" {{ url('asignatura/create') }}"> Registrar nueva asignatura </a>
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Asignatura</th>
            <th>Actividad1</th>
            <th>CalificacionAct1</th>
            <th>Actividad2</th>
            <th>CalificacionAct2</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($asignatura as $asignaturas)
        <tr>
            <td>{{$asignaturas->id}}</td>
            <td>{{$asignaturas->Asignatura}}</td>
            <td>{{$asignaturas->Actividad1}}</td>
            <td>{{$asignaturas->CalificacionAct1}}</td>
            <td>{{$asignaturas->Actividad2}}</td>
            <td>{{$asignaturas->CalificacionAct2}}</td>
            <td> 
            <a href="{{ url('/asignatura/'.$asignaturas->id.'/edit') }}">
                Editar
            </a>
             |
            <form action="{{ url('/asignatura/'.$asignaturas->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>