<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function store(Request $request){

        $empleado = new Employee();

        $empleado-> nombre = $request -> nombre;
        $empleado-> apellido = $request -> apellido;
        $empleado-> correo = $request -> correo;
        $empleado-> celular = $request -> celular;
        $empleado-> genero = $request -> genero;
        $empleado-> fecha_contratacion = $request -> fecha_contratacion;

        $empleado -> save();

        return response()->json([
            'status' => 200,
            'message' => 'Empleado añadido exitosamente',
        ]);
    }

    public function getAll(){
        $empleados = Employee::all();
        return response()->json([
            'status' => 200,
            'empleados' => $empleados,
        ]);
    }

    public function delete($id){
        $empleado = Employee::find($id);
        $empleado->delete();
        return response()->json([
            'status' => 200,
            'message' =>'Empleado eliminado exitosamente']);
    }

    public function getById($id){
        $empleado = Employee::find($id);
        return response()->json([
            'status' => 200,
            'message' =>'Empleado eliminado exitosamente',
            'empleado' => $empleado]);
    }

    public function update(Request $request, $id){

        $empleado = Employee::find($id);

        $empleado-> nombre = $request -> nombre;
        $empleado-> apellido = $request -> apellido;
        $empleado-> correo = $request -> correo;
        $empleado-> celular = $request -> celular;
        $empleado-> genero = $request -> genero;
        $empleado-> fecha_contratacion = $request -> fecha_contratacion;

        $empleado -> update();

        return response()->json([
            'status' => 200,
            'message' =>'Empleado actualizado exitosamente']);
    }
}
