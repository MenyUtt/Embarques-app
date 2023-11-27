<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Consumo;

class ProductoController extends Controller
{
    public function insertar(Request $request)
    {
        $prod=Producto::create([
            'id_prod'=>$request->id_prod,
            'Nombre'=>$request->Nombre,
            'Descripcion'=>$request->Descripcion,
            'Precio'=>$request->Precio,
            'Stock'=>$request->Stock
        ]);
       return Producto::all();

    }
       
    public function actualizar(Request $request,$id)
    {
        $prod=Producto::find($id);
            $prod->Nombre=$request->Nombre;
            $prod->Descripcion=$request->Descripcion;
            $prod->Precio=$request->Precio;
            $prod->Stock=$request->Stock;
            $prod->save();
            return $prod;
    }
    
    public function eliminar($id)
    {
        $prod=Producto::find($id);
        $prod->delete();
        return Producto::all();
    }

    public function mostrar()
    {
        $prod=Producto::all();
        //return $prod;
        return view('verProductos')->with([
            'prod'=>$prod
        ]);
    }
    public function subirpro()
    {
        return view('subirProducto');
    }
    
 
}
