<h1> {{ $modo }} materia </h1>

<label for="Asignatura"> Asignatura </label>
<input type="text" name="Asignatura" value="{{ isset ($asignaturas->Asignatura)?$asignaturas->Asignatura:'' }}" id="Asignatura" >
<br>
<label for="Actividad1"> Actividad1 </label>
<input type="text" name="Actividad1" value="{{ isset ($asignaturas->Actividad1)?$asignaturas->Actividad1:'' }}" id="Actividad1">
<br>
<label for="CalificacionAct1"> CalificacionAct1 </label>
<input type="number" name="CalificacionAct1" value="{{ isset ($asignaturas->CalificacionAct1)?$asignaturas->CalificacionAct1:'' }}" id="CalificacionAct1">
<br>
<label for="Actividad2"> Actividad2 </label>
<input type="text" name="Actividad2" value="{{ isset ($asignaturas->Actividad2)?$asignaturas->Actividad2:'' }}"  id="Actividad2">
<br>
<label for="CalificacionAct2"> CalificacionAct2 </label>
<input type="number" name="CalificacionAct2" value="{{ isset ($asignaturas->CalificacionAct2)?$asignaturas->CalificacionAct2:'' }}" id="CalificacionAct2">
<br>
<input type="submit" value="{{ $modo }} datos">

<a href=" {{ url('asignatura/') }}"> Regresar </a>
<br>