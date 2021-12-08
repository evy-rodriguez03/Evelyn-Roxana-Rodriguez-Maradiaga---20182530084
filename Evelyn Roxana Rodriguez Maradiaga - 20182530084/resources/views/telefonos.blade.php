@extends('plantilla')

@section('titulo')
Telefonos
@endsection

@section('content')



<h3>Detalles del Telefonos</h3>

<ul>
    @foreach ($telefonos as $telefono)
     <li>{{$telefono->numero. " ". "Tipo:".$telefono->tipo}}</li>
    @endforeach
</ul>

<a type="button" class="btn btn-primary" href="{{route('empleado.index')}}">Volver</a>


@endsection




@section('footer')
<p>Evelyn Roxana Rodriguez Maradiaga</p>
<p>20182530084</p>
<p>0703199805042</p>
@endsection

