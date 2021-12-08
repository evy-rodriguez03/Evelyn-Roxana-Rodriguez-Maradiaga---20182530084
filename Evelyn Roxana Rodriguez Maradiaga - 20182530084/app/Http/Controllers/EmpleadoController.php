<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Empleado;
use App\Models\Telefono;

use function PHPUnit\Framework\isNull;

class EmpleadoController extends Controller
{
    public function index()
    {
        $em = Empleado::paginate(10);
        return view('em')->with('em', $em);
    }

    public function crear()
    {
        return view('nuevo');
    }


    public function mostrar($id)
    {
        $em = Empleado::findOrFail($id);
        return view('ver')->with('empleado', $em);
    }



    public function guardar(Request $request)
    {
        $nuevoEmpleado = new Empleado();
        $nuevoEmpleado->nombre = $request->nombre;
        $nuevoEmpleado->apellido = $request->apellido;
        $nuevoEmpleado->identidad = $request->identidad;
        $nuevoEmpleado->foto = $request->foto;
        $nuevoEmpleado->salario = $request->salario;

        if (isNull($request->activo)) {
            $nuevoEmpleado->activo = false;
        } else {
            $nuevoEmpleado->activo = true;
        }

        $newtelefono = new Telefono();
        $newtelefono->numero =  $request->telefono;
        $newtelefono->tipo = "Personal";
        $newtelefono->save();

        $nuevoEmpleado->telefono = $newtelefono->id;

        $nuevoEmpleado->save();


        return redirect()->route('empleado.index')->with('mensaje', 'El Empleado fue registrado exitosamente');
    }



    public function buscar(Request $request)
    {
        $em =  Empleado::where('nombre', 'like', '%' . $request->texto_buscar . '%')->paginate(10);
        return view('empleados')->with('em', $em);
    }

    public function eliminar($id)
    {
        Empleado::destroy($id);
        return redirect()->route('empleado.index')->with('mensaje', 'Eliminado con exito.');
    }



    public function editar($id)
    {
        $em = Empleado::findOrFail($id);
        return view('editar')->with('empleado', $em);
    }





    public function actualizar(Request $request, $id)
    {
        $nuevoEmpleado = Empleado::findOrFail($id);


        $nuevoEmpleado->nombre = $request->nombre;
        $nuevoEmpleado->apellido = $request->apellido;
        $nuevoEmpleado->identidad = $request->identidad;
        $nuevoEmpleado->foto = $request->foto;
        $nuevoEmpleado->salario = $request->salario;

        if (isNull($request->activo)) {
            $nuevoEmpleado->activo = false;
        } else {
            $nuevoEmpleado->activo = true;
        }

        $newtelefono = new Telefono();
        $newtelefono->numero =  $request->telefono;
        $newtelefono->tipo = "Celular";
        $newtelefono->save();

        $nuevoEmpleado->telefono = $newtelefono->id;

        $nuevoEmpleado->save();

        return redirect()->route('empleado.index')->with('mensaje', 'El Empleado fue modificado exitosamente');
    }
}
