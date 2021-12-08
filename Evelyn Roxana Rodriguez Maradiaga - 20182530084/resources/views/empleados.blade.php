@extends('plantilla')


@section('titulo')
Empleados
@endsection

@section('content')

@if(session('mensaje'))
<div class="alert alert-success">
    {{session('mensaje')}}
</div>
@endif

<h3>Empleados</h3>

<a type="button" class="btn btn-primary" href="{{route('empleado.crear')}}">Nuevo Empleado</a>


<form method="POST" action="{{route('empleado.buscar')}}">
    <h4>Buscar</h4>
    @csrf
    <input name="texto_buscar" id="texto_buscar">
</form>

<table class="table table-bordered table-success">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Identidad</th>
            <th scope="col">Nombre</th>
            <th scope="col">Teléfono</th>
            <th scope="col">foto</th>
            <th scope="col">Salario</th>
            <th scope="col">Activo</th>
        </tr>
    </thead>
    <tbody>

        @forelse($empleados as $empleado)
        <tr>
            <td scope="col">{{$empleado->id}}</td>
            <td scope="col">{{$empleado->identidad}}</td>
            <td scope="col">
                <a href="{{route('empleado.mostrar',['id'=> $empleado->id] )}}">{{$empleado->nombre." ".$empleado->apellido}}</a>
            </td>
            <td scope="col">{{$empleado->telefono}}</td>
            <td scope="col">{{$empleado->foto}}</td>
            <td scope="col">{{$empleado->salario}}</td>
            <td scope="col">{{$empleado->activo}}</td>
            <td scope="col"> <a type="button" class="btn btn-warning"
                    href="{{route('empleado.editar',['id'=> $empleado->id] )}}">Editar</a> </td>
            <td scope="col" action="{{route('empleado.borrar',['id'=> $empleado->id] )}}">

                <form method="post" action="{{route('empleado.borrar',['id'=> $empleado->id] )}}"
                    onclick="return confirm('Desea Eliminar a este Empleado?')">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                </form>
            </td>

        </tr>
        @empty
        <tr colspan='4'>
            <td>No hay Empleados</td>
        </tr>
        @endforelse

    </tbody>
</table>

{{$empleados->links()}}

@endsection

@section('footer')
<p>Evelyn Roxana Rodriguez Maradiaga</p>
<p>20182530084</p>
<p>0703199805042</p>
@endsection
