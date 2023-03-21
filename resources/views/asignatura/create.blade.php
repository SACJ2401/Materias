Formulario de creacion de asignaturas

<form action="{{ url('/asignatura') }}" method="post">
@csrf 
@include('asignatura.form',['modo'=>'Crear']);


</form>