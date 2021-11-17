<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Combo;
use App\Models\Decoracion;
use App\Models\Producto;
use App\Models\Cliente;
use App\Models\Categoria;
use App\Models\CuentaBancaria;
use App\Models\ItemDescuento;
use Illuminate\Support\Facades\Auth;
use App\Models\TipoCategoria;
use App\Models\Ciudad;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        try {
            if (Auth::check()) {
                $id = Auth::id();
                $cliente = Cliente::where('id_usuario',$id)->first();
                $cuentas= CuentaBancaria::where('id_estado',1)->get();
                $ciudades= Ciudad::where('id_estado',1)->get();
                return view('cart.index',compact('cliente','cuentas','ciudades'));
            }
            else{
                $ciudades= Ciudad::where('id_estado',1)->get();
                $cuentas= CuentaBancaria::where('id_estado',1)->get();
                return view('cart.index', compact('cuentas','ciudades'));
            }

        } catch(\Exception $e){
      
        echo 'Error: ' .$e->getMessage();
        }
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           
        
      

        try {
            $id_item= request ('id_item');
        $combos=0;
        $productos=0;
       
        foreach (Cart::getContent() as $item) {
            
            $id_i= $item->id;
            $cantidad=$item->quantity;
            $articulo= Item::where('id_item',$id_i)->first();
            $id_tipo= $articulo->id_tipo;

            
            if($id_tipo==1)
            {
                $combos+=$cantidad;
            }
            if($id_tipo==2) 
            {
                $productos+=$cantidad;
            }  
            if($id_item==$id_i){

                if($combos==1)
                {
                    return redirect()->back()->with(['message' => "No puede agregar +1 Combo. Puede agregar hasta 2 productos individuales + 1 Combo Seleccionado.", 'alert' => 'alert-warning']);
                }

                if($cantidad==2){
                    return redirect()->back()->with(['message' => "No puede agregar +2 Combos/Productos Individuales del mismo.", 'alert' => 'alert-warning']);
                }
                
            }
        }

            $id_item= request ('id_item');
            $items= Item::where('id_item',$id_item)->first();
            $tipo_categoria= $items->id_tipo;
    
            if($tipo_categoria==1)
            {
                if($combos==1)
                {
                    return redirect()->back()->with(['message' => "No puede agregar +1 Combo. Puede agregar hasta 2 productos individuales + 1 Combo Seleccionado.", 'alert' => 'alert-warning']);
                }
                if($productos>2)
                {
                    return redirect()->back()->with(['message' => "No puede agregar 1 Combo con +2 Productos Personalizados.", 'alert' => 'alert-warning']);
                }
            }

            if($tipo_categoria==2)
            {
                if($productos==2 && $combos==1)
                {
                    return redirect()->back()->with(['message' => 'No puede agregar +2 Productos Adicionales con 1 Combo Seleccionado.', 'alert' => 'alert-warning']);
                }
                if($productos==8 && $combos==0)
                {
                    return redirect()->back()->with(['message' => 'No puede agregar +8 Productos Individuales.', 'alert' => 'alert-warning']);
                }
               
                
            }
      

    
        if (Auth::check()) {

            $id_item= request ('id_item');
            $items= Item::where('id_item',$id_item)->first();
            

            if(ItemDescuento::where('id_item', $id_item)->exists()){

                $itemsD=ItemDescuento::where('id_item', $id_item)->first();
                $preciobase= $items->precio;
                $precio= $itemsD->precio_nuevo;
                $titulo= $items->titulo;
                $cantidad=1;
                $descuento= $preciobase-$precio;

                Cart::add(array(
                    'id' => $id_item, 
                    'name' => $titulo,
                    'price' => $precio,
                    'quantity' => $cantidad,
                    'discount' => $descuento,
                ));
                return back();

            }
            else
            {
                $descuento=0;
                $titulo= $items->titulo;
                $precio= $items->precio;
                $cantidad=1;
                
                Cart::add(array(
                    'id' => $id_item, 
                    'name' => $titulo,
                    'price' => $precio,
                    'quantity' => $cantidad,
                    'discount' => $descuento,
                ));

                
                return back();
            }
        }
        else{

            $descuento=0;
            $id_item= request ('id_item');
            $items= Item::where('id_item',$id_item)->first();

            $titulo= $items->titulo;
                $precio= $items->precio;
                $cantidad=1;
                
                Cart::add(array(
                    'id' => $id_item, 
                    'name' => $titulo,
                    'price' => $precio,
                    'quantity' => $cantidad,
                    'discount' => $descuento,
                ));
                return back();

        }      

        } catch(\Exception $e){
       
        echo 'Error: ' .$e->getMessage();
        }


        
            
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cart)
    {

        try {
            Cart::remove($cart);
            return back();

        } catch(\Exception $e){
       
        echo 'Error: ' .$e->getMessage();
        }
       
    }

    public function eliminar($cart)
    {

        try {
            Cart::remove($cart);
            return back();

        } catch(\Exception $e){
       
        echo 'Error: ' .$e->getMessage();
        }

      
    }

    public function agregar($cart)
    {

        try {
           
            
        $id_item= $cart;
        $combos=0;
        $productos=0;
       
        foreach (Cart::getContent() as $item) {
            
            $id_i= $item->id;
            $cantidad=$item->quantity;
            $articulo= Item::where('id_item',$id_i)->first();
            $id_tipo= $articulo->id_tipo;

            if($id_item==$id_i){

                if($combos==1)
                {
                    return redirect()->back()->with(['message' => "No puede agregar +1 Combo. Puede agregar hasta 2 productos individuales + 1 Combo Seleccionado.", 'alert' => 'alert-warning']);
                }

                if($cantidad==2){
                    return redirect()->back()->with(['message' => "No puede agregar +2 Combos/Productos Individuales del mismo.", 'alert' => 'alert-warning']);
                }
                
            }

            if($id_tipo==1)
            {
                $combos+=$cantidad;
            }
            if($id_tipo==2) 
            {
                $productos+=$cantidad;
            }  
        }

            
            $items= Item::where('id_item',$id_item)->first();
            $tipo_categoria= $items->id_tipo;
    
            if($tipo_categoria==1)
            {
                if($combos==1)
                {
                    return redirect()->back()->with(['message' => "No puede agregar +1 Combo. Puede agregar hasta 2 productos individuales + 1 Combo Seleccionado.", 'alert' => 'alert-warning']);
                }
                if($productos==2)
                {
                    return redirect()->back()->with(['message' => "No puede agregar 1 Combo con +2 Productos Personalizados.", 'alert' => 'alert-warning']);
                }
            }

            if($tipo_categoria==2)
            {
                if($productos==2 && $combos==1)
                {
                    return redirect()->back()->with(['message' => 'No puede agregar +2 Productos Adicionales con 1 Combo Seleccionado.', 'alert' => 'alert-warning']);
                }
                if($productos==8 && $combos==0)
                {
                    return redirect()->back()->with(['message' => 'No puede agregar +8 Productos Individuales.', 'alert' => 'alert-warning']);
                }
               
                
            }

        Cart::update($cart, array(
            'quantity' => 1, 
          ));

          return back();

        } catch(\Exception $e){
       
        echo 'Error: ' .$e->getMessage();
        }


    }
}
