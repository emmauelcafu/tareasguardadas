<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    public function store(Request $request)
    {
        // Corrección en la línea de validación
        $request->validate([
            'title' => 'required|min:3'
        ]);
    
        $todo = new Todo;
        $todo->title = $request->input('title');
        $todo->save();
    
        // Puedes redirigir a alguna ruta después de guardar el Todo
        return redirect()->route('todos')->with('succedd','Tarea creada correctamente ');
    }
}
