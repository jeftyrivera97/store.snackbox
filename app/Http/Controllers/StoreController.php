<?php

namespace App\Http\Controllers;

use App\Events\AdminPedidoEvent;
use App\Events\OrderStatusChangeEvent;
use Illuminate\Http\Request;
use App\Models\Combo;
use App\Models\Publicidad;
use App\Models\Categoria;
use App\Models\ComboCategoria;
use App\Models\TipoCategoria;
use App\Models\ProductoCategoria;
use App\Models\DecoracionCategoria;
use App\Models\ItemDescuento;
use App\Models\Producto;
use App\Models\Empresa;
use App\Models\FolioFactura;
use App\Models\Factura;
use App\Models\ComboDetalle;
use Illuminate\Support\Str;
use App\Models\Pedido;
use App\Models\Ciudad;
use App\Models\Cliente;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\VentaCredito;
use App\Models\PedidoDeposito;
use App\Models\User;
use App\Models\Venta;
use App\Models\PedidoDetalle;
use App\Models\Role;
use App\Models\RoleUser;
use App\Notifications\AdminPedidoNotificacion;
use App\Notifications\NewMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $role = 'cliente';
        if(Auth::check())
        {
            if (!$request->user()->hasRole($role)) {

                $request->session()->flush();
            
                $request->session()->regenerate();
            
                return redirect('login');
            }
            else
            {
                $categorias = DB::table('categorias')
                ->where('id_tipo',2)
                ->get();

                $productosCategorias= TipoCategoria::where('descripcion','Productos')->first();
                $id_tipo1= $productosCategorias->id_tipo;


                $combosCategorias=ComboCategoria::all();

                $populares= Categoria::where('descripcion','Popular')->first();
                $id_popular = $populares->id_categoria;
                $combosPopulares = ComboCategoria::where('id_categoria',$id_popular)->get();

                $tendencias= Categoria::where('descripcion','Tendencia')->first();
                $id_tendencia = $tendencias->id_categoria;
                $combosTendencia = ComboCategoria::where('id_categoria',$id_tendencia)->get();

                $combos= Combo::all();
                $publicidades= Publicidad::where('id_estado',1)->get();

                return view('home', compact('combosPopulares','combosTendencia','combos','categorias','publicidades'));
            }
        }
        else
        {
            $categorias = DB::table('categorias')
            ->where('id_tipo',2)
            ->get();

            $productosCategorias= TipoCategoria::where('descripcion','Productos')->first();
            $id_tipo1= $productosCategorias->id_tipo;


            $combosCategorias=ComboCategoria::all();

            $populares= Categoria::where('descripcion','Popular')->first();
            $id_popular = $populares->id_categoria;
            $combosPopulares = ComboCategoria::where('id_categoria',$id_popular)->get();

            $tendencias= Categoria::where('descripcion','Tendencia')->first();
            $id_tendencia = $tendencias->id_categoria;
            $combosTendencia = ComboCategoria::where('id_categoria',$id_tendencia)->get();

            $combos= Combo::all();
            $publicidades= Publicidad::where('id_estado',1)->get();

            return view('home', compact('combosPopulares','combosTendencia','combos','categorias','publicidades'));
        }
        

        
    }

    public function verificar(Request $request)
    {
        $fecha= request ('fecha_entrega');
        $pedidos= Pedido::where('fecha_entrega',$fecha)->get();
        $total= count($pedidos);

        return $total;
    
    }


    public function leerNotificaciones()
    {
        $id = Auth::id();
        $cliente = Cliente::where('id_usuario',$id)->first();
        
        $pedidoNotificaciones = Auth::user()->unreadNotifications;
        return view('notificaciones.index', compact('pedidoNotificaciones','cliente'));
    }

    public function leyendoNotificaciones(Request $request)
    {

        Auth::user()->unreadNotifications
                    ->when($request->input('id'), function($query) use ($request){
                        return $query->where('id', $request->input('id'));
                    })->markAsRead();

                    return response()->noContent();
    }

    public function contacto()
    {

        return view('informacion.contacto');
    }

    public function catalogo()
    {

        return view('catalogo.index');
    }

    public function politicas()
    {

        return view('informacion.politica');
    }

    public function envios()
    {

        return view('informacion.envio');
    }

    public function terminos()
    {

        return view('informacion.termino');
    }

    public function pedidoNuevo()
    {

        $id_usuario = Auth::id();
        $cliente=Cliente::where('id_usuario',$id_usuario)->first();
        $id_cliente= $cliente->id_cliente;

        $pedidos= Pedido:: where('id_cliente',$id_cliente)->get();
        $pedidosOrder = $pedidos->sortByDesc('id_pedido');
       

        return view('cliente.pedidoNuevo', compact('cliente','pedidosOrder'));
    }
    public function pedidoClienteNuevo()
    {

        $id_usuario = Auth::id();
        $cliente=Cliente::where('id_usuario',$id_usuario)->first();
        $id_cliente= $cliente->id_cliente;
        $pedidos= Pedido:: where('id_cliente',$id_cliente)->get();
        $pedidosOrder = $pedidos->sortByDesc('id_pedido');

        return view('cliente.nuevo', compact('cliente','pedidosOrder'));
    }

    public function seleccionar($id_categoria)
    {
        $categoria= Categoria::where('id_categoria',$id_categoria)->first();
        $id_tipo= $categoria->id_tipo;
        $descripcion= $categoria->descripcion;

        if($id_tipo==2)
        {
            $productosCategorias= ProductoCategoria::where('id_categoria',$id_categoria)->get();
            return view('producto.select', compact('productosCategorias','descripcion'));
        }
        if($id_tipo==3)
        {
            $decoracionCategorias= DecoracionCategoria::where('id_categoria',$id_categoria)->get();
            return view('decoracion.select', compact('decoracionCategorias','descripcion'));
        }  
    }

    public function descuentoIndex()
    {

        $itemsD= ItemDescuento::where('id_estado',1)->get();

        return view('descuento.index', compact('itemsD'));
    }

     public function comboIndex()
    {
        return view('combo.index');
    }

    public function tendenciaIndex()
    {   
        $tendencias= Categoria::where('descripcion','Tendencia')->first();
        $id_tendencia = $tendencias->id_categoria;
        $combosTendencia = ComboCategoria::where('id_categoria',$id_tendencia)->get();

        return view('combo.tendencia',compact('combosTendencia'));

    }

    public function popularIndex()
    {
        $populares= Categoria::where('descripcion','Popular')->first();
        $id_popular = $populares->id_categoria;
        $combosPopulares = ComboCategoria::where('id_categoria',$id_popular)->get();

        return view('combo.popular',compact('combosPopulares'));
    }

    public function promocionIndex()
    {
        $promociones= Categoria::where('descripcion','Promocion')->first();
        $id_promocion = $promociones->id_categoria;
        $combosPromocion = ComboCategoria::where('id_categoria',$id_promocion)->get();

        return view('combo.promocion',compact('combosPromocion'));
    }

    public function comboSelect($id_combo)
    {
        $combo= Combo::where('id_combo',$id_combo)->first();

        $detalles= ComboDetalle::where('id_combo',$id_combo)->get();
        $tipo_categoria= TipoCategoria::where('descripcion','Productos')->first();
        $id_tipo= $tipo_categoria->id_tipo;

        $categorias= Categoria::where('id_tipo',$id_tipo)->get();
        
        return view('combo.select', compact('combo','detalles','categorias'));
    }

    public function clienteIndex()
    {
        if (Auth::check()) {
            $id = Auth::id();
            $cliente = Cliente::where('id_usuario',$id)->first();
            $id_cliente=$cliente->id_cliente;

            $ventas= Venta::where('id_cliente',$id_cliente)->where('id_estado',2)->get();
            $contador=count($ventas);
            $sumador=0;
            for($i=0;$i<$contador;$i++)
            {
                $id_v= $ventas[$i]->id_venta;
                $buscador= VentaCredito::where('id_venta',$id_v)->sum('saldo');
                $sumador=$sumador+$buscador;
            }

            $pedidosTotal=$sumador;
            return view('cliente.index',compact('cliente','pedidosTotal'));
        }
    }

    public function clientePedido()
    {
        if (Auth::check()) {
            $id = Auth::id();
            $cliente = Cliente::where('id_usuario',$id)->first();
            $id_cliente= $cliente->id_cliente;
            $pedidos= Pedido::where('id_cliente',$id_cliente)->get();
            $pedidosOrder = $pedidos->sortByDesc('id_pedido');
            $ventas= Venta::where('id_cliente',$id_cliente)->where('id_estado',2)->get();
            $contador=count($ventas);
            $sumador=0;
            for($i=0;$i<$contador;$i++)
            {
                $id_v= $ventas[$i]->id_venta;
                $buscador= VentaCredito::where('id_venta',$id_v)->sum('saldo');
                $sumador=$sumador+$buscador;
            }

            $pedidosTotal=$sumador;

            if (Foliofactura::where('id_estado',1)->exists()) {
                $folios= Foliofactura::where('id_estado',1)->get();
                return view('cliente.pedido',compact('cliente','pedidosOrder','pedidosTotal','folios'));
            }

            $folios= Foliofactura::where('id_estado',1)->get();

            //event(new OrderStatusChangeEvent($pedidos));
            return view('cliente.pedido',compact('cliente','pedidosOrder','pedidosTotal','folios'));
        }
    }

    public function pedidoPosponer($id_pedido)
    {
       $pedido=Pedido::where('id_pedido',$id_pedido)->first();
       $id = Auth::id();
       $cliente = Cliente::where('id_usuario',$id)->first();
       $ciudades= Ciudad::where('id_estado',1)->get();
    
        return view('pedido.posponer',compact('cliente','pedido','ciudades'));
        
    }

    public function pedidoReingreso(Request $request)
    {

        $comentario= request('comentario');
        if($comentario=="")
        {
            $comentario="Ningun comentario/instruccion adicional.";
        }
     
        $id_pedido= request('id_pedido');
        $pedido= Pedido::where('id_pedido',$id_pedido)->first();
        $hoy = Carbon::now();
        $ventas= Venta::where('id_pedido',$id_pedido)->first();
        $id_venta= $ventas->id_venta;

        DB::beginTransaction();

        try {
            $pedidos =  Pedido::findOrFail($id_pedido);
            $pedidos-> id_estado = 1;
            $pedidos-> fecha_pedido = $hoy;
            $pedidos-> fecha_entrega = request ('fecha_entrega');
            $pedidos-> hora_entrega = request ('hora_entrega');
            $pedidos-> id_ciudad = request ('ciudad');
            $pedidos-> direccion_entrega = request ('direccion_entrega');
            $pedidos-> destinatario = request ('destinatario');
            $pedidos-> comentario = $comentario;
            DB::Commit();
            $pedidos->update();

            DB::beginTransaction();
            $ventas = Venta::find($id_venta);
            $ventas->id_estado = 1;
            $ventas->update();
            DB::commit();

            event(new AdminPedidoEvent($pedidos));

            
            return redirect('cliente-pedido')->with(['message' => '¡Fecha pospuesta con exito!', 'alert' => 'alert-success']);

        } catch(\Exception $e){
        DB::Rollback();
        echo 'Error: ' .$e->getMessage();
        }

       $id = Auth::id();
       $cliente = Cliente::where('id_usuario',$id)->first();
       $ciudades= Ciudad::where('id_estado',1)->get();
    
        return view('pedido.posponer',compact('cliente','pedido','ciudades'));
        
    }


 
    public function clienteNuevaContraseña()
    {
        DB::beginTransaction();

        try {
            $id= request('id');
            $contraseña= request('contraseña_nueva');
            $users =  User::findOrFail($id);
            $users-> password = Hash::make($contraseña);
            DB::Commit();
                $users->update();

            return redirect('cliente-pedido')->with('message', 'Contraseña actualizada con exito! Ahora puede visualizar sus pedidos');
        } catch(\Exception $e){
            DB::Rollback();
            echo 'Error: ' .$e->getMessage();
        }

      
    }

    public function clienteEdit()
    {
       
        DB::beginTransaction();

        try {
            $id= request('id');
            $contraseña= request('contraseña_nueva');
            $users =  User::findOrFail($id);
            $users-> password = Hash::make($contraseña);
            DB::Commit();
                $users->update();
    
                return back()->with(['message' => 'Contraseña actualizada con exito', 'alert' => 'alert-success']);

        } catch(\Exception $e){
        DB::Rollback();
        echo 'Error: ' .$e->getMessage();
        }

       
    }

    public function pedidoImprimir($id_pedido)
    {

        try {
            $pedidos= Pedido::where('id_pedido',$id_pedido)->first();
            $detalles= PedidoDetalle::where('id_pedido',$id_pedido)->get();
    
            $pdf = PDF::loadView('cliente.pedidoImprimir', compact('pedidos','detalles'));
            return $pdf->download('pedido.pdf');

        } catch(\Exception $e){
       
        echo 'Error: ' .$e->getMessage();
        }
      

       
    }

    public function facturaImprimir($id_pedido)
    {

        
        try {
            $empresa= Empresa::where('id_empresa',1)->first();
            $pedido= Pedido::where('id_pedido',$id_pedido)->first();
            $detalles= PedidoDetalle::where('id_pedido',$id_pedido)->get();
            $venta= Venta::where('id_pedido',$id_pedido)->first();
            $id_venta= $venta->id_venta;

            if (Factura::where('id_venta', $id_venta)->doesntExist()) {
                return back()->with(['message' => 'No existe Factura para este pedido por favor contactese con Administrador', 'alert' => 'alert-danger']);
            }
            else if(Factura::where('id_venta', $id_venta)->exists()){
                $factura= Factura::where('id_venta',$id_venta)->first();
                $folio= FolioFactura::where('id_estado',1)->first();
        
                $pdf = PDF::loadView('factura.imprimir', compact('pedido','detalles','factura','folio','empresa','venta'));
                return $pdf->download('factura.pdf');

            }

        } catch(\Exception $e){
       
        echo 'Error: ' .$e->getMessage();
        } 
       
    }


  
    public function guardarPedido(Request $request)
    {
        $validated = $request->validate([
            'apellido' => 'required',
            'nombre' => 'required',
            'codigo_cliente' => 'required|min:13|max:13',
            'telefono' => 'required|min:8|max:8',
            
        ]);

      
        DB::beginTransaction();

        try
        {
            $tipo_pago= request ('tipo_pago');
            $tipo_cliente=0;

            if (Auth::check()) {
                $id = Auth::id();
                $encontrado = Cliente::where('id_usuario',$id)->first();
                $id_cliente= $encontrado->id_cliente; 
                $tipo_cliente=1;
            }
            else{

                $codigo_cliente= request ('codigo_cliente');
                $correo= request ('email');

                
                if (Cliente::where('codigo_cliente', $codigo_cliente)->exists()) {
                    return back()->with(['message' => 'Este cliente ya existe, porfavor inicie sesion.', 'alert' => 'alert-danger']);
                   
                }

                if (User::where('email', $correo)->exists()) {
                    return back()->with(['message' => 'Este cliente ya existe, porfavor inicie sesion.', 'alert' => 'alert-danger']);
                   
                }

                $tipo_cliente=2;
                $users = new User();
                $users-> name = request ('nombre');
                $users-> email = request ('email');
                $users-> password = Hash::make('123');
                DB::Commit();
                $users->save();
                $user_id=$users->id;
                $users->roles()->attach(Role::where('name', 'cliente')->first());
                $clientes = new Cliente();
                $clientes-> codigo_cliente = request ('codigo_cliente');
                $clientes-> rtn = "0000-0000-000000";
                $clientes-> razon_social = "CONSUMIDOR FINAL";
                $clientes-> nombre = request ('nombre');
                $clientes-> apellido = request ('apellido');
                $clientes-> telefono = request ('telefono');
                $clientes-> direccion = 'La Ceiba, Atlantida';
                $clientes-> id_ciudad = request ('ciudad');
                $clientes-> sexo = 'No Definido';
                $clientes-> id_estado = 1;
                $clientes-> tipo = 1;
                $clientes-> id_usuario =$user_id;
                DB::Commit();
                $clientes->save();
                $id_cliente= $clientes->id_cliente;
                
                Auth::loginUsingId($user_id);
                
            }
        
            $imagen = $request->file('img');
            $nombre = $imagen->getClientOriginalName();
            $random = Str::random(15);
            $nombre = "$random$nombre";
            $path = $request->file('img')->storeAs(
                'depositos',
                $nombre,
                'public'
            );
            $url = "/storage/app/public/depositos/$nombre";

            $comentario= request('comentario');
            if($comentario=="")
            {
                $comentario="Ningun comentario/instruccion adicional.";
            }
            
            $hoy = Carbon::now();
            $codigo = Str::random(15);
            $pedidos = new Pedido();
            $pedidos-> codigo_pedido =$codigo;
            $pedidos-> id_cliente =$id_cliente;
            $pedidos-> fecha_pedido = $hoy;
            $pedidos-> fecha_entrega = request ('fecha_entrega');
            $pedidos-> hora_entrega = request ('hora_entrega');
            $pedidos-> id_estado = 1;
            $pedidos-> id_ciudad = request ('ciudad');
            $pedidos-> direccion_entrega = request ('direccion_entrega');
            $pedidos-> destinatario = request ('destinatario');
            $pedidos-> total = request ('total_pedido');
            $pedidos-> comentario = $comentario;
            DB::Commit();
            $pedidos->save();
            $id_pedido=$pedidos->id_pedido;
           

            if($pedidos->save())
            {
               
                $descuento= Cart::getTotalDiscount();
                $l= 1;
            
                foreach (Cart::getContent() as $item) {
                  
                    
                    $id_item= $item->id;
                    $precio=$item->price;
                    $cantidad=$item->quantity;
                    $subtotal=$precio*$cantidad;

                    $detalles= new PedidoDetalle();
                    $detalles-> id_pedido = $id_pedido;
                    $detalles-> linea = $l;
                    $detalles-> id_item = $id_item;
                    $detalles-> precio = $precio;
                    $detalles-> cantidad = $cantidad;
                    $detalles-> subtotal_linea = $subtotal;
                    DB::Commit();
                    $detalles->save();
                    $l+=1;
                  
                    }
               
                    $ventas= new Venta();
                    $ventas-> fecha =$hoy;
                    $ventas-> id_pedido =$id_pedido;
                    $ventas-> id_cliente =$id_cliente;
                    $ventas-> tipo_pago = 1;
                    $ventas-> id_estado = 1;
                    $ventas-> descuento = $descuento;
                    $ventas-> total =request ('total_pedido');
                    DB::Commit();
                    $ventas->save();
                    $id_venta= $ventas->id_venta;

                    if($ventas->save())
                    {
                        $depositos= new PedidoDeposito();
                        $depositos-> id_pedido = $id_pedido;
                        $depositos-> id_cuenta = 1;
                        $depositos-> numero_referencia = request ('numero_referencia');
                        $depositos-> monto = request ('total_pedido');
                        $depositos-> estado =0;
                        $depositos-> ruta_imagen = $url;
                        DB::Commit();
                        $depositos->save();
                    }

                    Cart::clear();

                    if($tipo_cliente==1)
                    {
                        event(new AdminPedidoEvent($pedidos));

                        return redirect('pedido-nuevo');
                    }
                    if($tipo_cliente==2)
                    {
                    

                        event(new AdminPedidoEvent($pedidos));

                        return redirect('pedido-cliente-nuevo');
                    
                    }
                  
                }
        }
            
        catch(\Exception $e)
        {
            DB::Rollback();
            echo 'Error: ' .$e->getMessage();
        }
        
    }

    






 


}
