@extends('plantilla')

@section('titulo')
Empleado
@endsection

@section('content')

<h2>Datos del Empleado {{$empleado->nombre." ".$empleado->apellido}}</h2>

<h2 scope="col">Nombre</h2>
<h4 scope="col">{{$empleado->nombre}}</h4>

<h2 scope="col">Apellido</h2>
<h4 scope="col">{{$empleado->apellido}}</h4>

<h2 scope="col">Identidad</h2>
<h4 scope="col">{{$empleado->identidad}}</h4>

<h2 scope="col">Telefono</h2>
<h4 scope="col">{{$empleado->telefono}}</h4>

<h2 scope="col">Foto</h2>
<h4 scope="col">{{$empleado->foto}}</h4>

<h2 scope="col">Salario</h2>
<h4 scope="col">{{$empleado->salario}}</h4>

<h2 scope="col">Activo</h2>
<h4 scope="col">{{$empleado->activo}}</h4>

<a type="button" class="btn btn-primary" href="{{route('empleado.index')}}">Volver</a>


@endsection



@section('footer')
<p>Evelyn Roxana Rodriguez Maradiaga</p>
<p>20182530084</p>
<p>0703199805042</p>
@endsection
