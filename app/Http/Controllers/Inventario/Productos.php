<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;


class Productos extends Controller
{
    public function index(){
        // Consultar de productos
        /*
        $productos = DB::table('productos')
                    ->select('nombreProducto', 'cantidadProducto', 'precioProducto','fotoProducto', 'categoria')
                    ->get();
        return view('productos.listado',['productos' => $productos] );
        */
        
        /*Metodo First
        $producto = DB::table('productos')->first();
        return view('productos.listado',['p' => $producto] );
        */

        //Clausula where : orwhere
        /*
        $productos = DB::table('productos')
                    ->select('nombreProducto', 'cantidadProducto', 'precioProducto','fotoProducto', 'categoria')
                    ->where('categoria', '=', 1)
                    ->where('precioProducto', '>=', 4000)
                    ->orwhere('cantidadProducto', '>', 10)
                    ->get();
        return view('productos.listado',['productos' => $productos] );
        */

        // Clausula Value
        /*
        $producto = DB::table('productos')
                    ->where('categoria', '=', 1)
                    ->value('id');
        return view('productos.listado',['p' => $producto] );
        */

        //Orderby
        /*
        $productos = DB::table('productos')
                    ->select('nombreProducto', 'cantidadProducto', 'precioProducto','fotoProducto', 'categoria')
                    ->orderBy('nombreProducto', 'asc')
                    ->get();
        return view('productos.listado',['productos' => $productos] );
        */

        //Clausula Skip/Take y Offset/Limit
        /*
        $productos = DB::table('productos')
                    ->select('nombreProducto', 'cantidadProducto', 'precioProducto','fotoProducto', 'categoria')
                    ->orderBy('nombreProducto', 'asc')
                    ->skip('2')
                    ->take('4')
                    ->get();
        return view('productos.listado',['productos' => $productos] );
        */
        // Uso de Join
        $productos = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id', 'pro.nombreProducto', 'pro.fotoProducto', 'cat.nombreCategoria')
                    ->get();
        return view('productos.listado',['productos' => $productos] );


    }

    public function detalle($id){
        $producto = Producto::findOrFail($id);
        return view('productos.detalle', compact('producto'));
    }

    public function formularioReg(){
        $categorias = Categoria::all();
        return view('productos.form_registro', compact('categorias'));
    }

    public function registrar(Request $request){
        $producto = new Producto();
        $producto->nombreProducto = $request->input('nombrePro');
        $producto->cantidadProducto = $request->input('cantidadPro');
        $producto->precioProducto = $request->input('precioPro');
        $producto->fotoProducto = $request->input('fotoPro');
        $producto->categoria = $request->input('categoria');
        $producto->save();
        return redirect()->route('listadoProductos');    
    }

    public function form_actualiza($id){
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        return view('productos.form_actualiza', compact('producto', 'categorias'));
    }

    public function actualizar(Request $request, $id){
        $product = Producto::findOrFail($id);
        $product->nombreProducto = $request->input('nombrePro');
        $product->cantidadProducto = $request->input('cantidadPro');
        $product->precioProducto = $request->input('precioPro');
        $product->fotoProducto = $request->input('fotoPro');   
        $product->categoria = $request->input('categoria');
        $product->save();
        return redirect()->route('listadoProductos');
    }

    public function eliminar($id){
        $product = Producto::findOrFail($id);
        $product->delete();
        return redirect()->route('listadoProductos');
    }

    public function form_consulta(){
        return view('productos.form_consulta');
    }

    public function consultar(Request $request){
        $nombre = $request->input('nombrePro');
        $producto = Producto::where('nombreProducto', 'like', $nombre)->first();
        if($producto)
            return view('productos.resultado', compact('producto'));
        else
            return view('productos.mensaje');
        
    }

  

}
