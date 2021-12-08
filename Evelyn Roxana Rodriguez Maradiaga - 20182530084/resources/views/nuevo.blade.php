@extends('plantilla')


@section('titulo')
Empleado
@endsection

@section('content')

<h1>Nuevo Empleado</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}}</li>
        @endforeach
    </ul>
 </div>
@endif

<form method="POST" action="{{route('empleado.guardar')}}">
    @csrf

<div class="mb-3">
  <label for="nombre" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba el nombre">
</div>

<div class="mb-3">
  <label for="apellido" class="form-label">Apellido</label>
  <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escriba el Apellido">
</div>

<div class="mb-3">
  <label for="identidad" class="form-label">Identidad</label>
  <input type="text" class="form-control" id="identidad" name="identidad" placeholder="Escriba la Identidad">
</div>

<div class="mb-3">
  <label for="telefono" class="form-label">Teléfono</label>
  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Escriba el Telefono">
</div>

<div class="mb-3">
  <label for="foto" class="form-label">Foto</label>
  <input type="text" class="form-control" id="foto" name="foto" placeholder="Ingrese la Foto">
</div>

<div class="mb-3">
  <label for="salario" class="form-label">Salario</label>
  <input type="text" class="form-control" id="salario" name="salario" placeholder="Escriba el salario">
</div>

<div class="mb-3">
    <label for="activo" class="form-label">Activo</label>
    <input type="checkbox" id="activo" name="activo">
</div>


<button type="submit" class="btn btn-info"> Guardar </button>
<button type="reset" class="btn btn-danger"> Reestablecer </button>

</form>


@endsection



@section('footer')
<p>Evelyn Roxana Rodriguez Maradiaga</p>
<p>20182530084</p>
<p>0703199805042</p>
@endsection



