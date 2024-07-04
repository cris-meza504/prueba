<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class productoController extends Controller
{
    public function mostrar(){
        $productos = Producto::all();
       // echo $productos;
        return view('mostrarProducto',compact('productos')); //para enviar el objeto de producto a la vista 
    }

    public function editar($id){
        $productoEditar = Producto::find($id);
        //echo $productoEditar;
        return view('editarProducto', compact('productoEditar'));
    }

    public function guardar(Request $request){
        //echo $request;
        $nvoProducto = new Producto();
        $nvoProducto->nombre = $request->nombre;
        $nvoProducto->descripcion = $request->descripcion;
        $nvoProducto->precio = $request->precio;
        $nvoProducto->categoria =$request->categoria;
        $nvoProducto->tipo = $request->tipo;
        $nvoProducto->save();

        return redirect('/productos/mostrar');
    }

    public function salvarEditar(Request $request, $id){
        $productoActualizar = Producto::find($id);
        $productoActualizar->nombre = $request->nombre;
        $productoActualizar->descripcion = $request->descripcion;
        $productoActualizar->precio = $request->precio;
        $productoActualizar->categoria = $request->categoria;
        $productoActualizar->tipo = $request->tipo;
        $productoActualizar->save();
        return redirect('/productos/mostrar');
    }

    public function crearProducto(){
        return view('agregarProducto');
    }

    public function eliminar($id){
        $productoEliminar = Producto::find($id);
        return view('eliminarProducto', compact('productoEliminar'));
    }

    public function destroy($id){
        $productoEliminar = Producto::find($id);
        $productoEliminar->delete();
        
        return redirect('/productos/mostrar');
    }
}
