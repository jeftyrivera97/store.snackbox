<html>
<head>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <style>
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #864040;
  color: white;
}
    body{
      font-family: sans-serif;
    }
    @page {
      margin: 160px 50px;
    }
    header { position: fixed;
      left: 0px;
      top: -160px;
      right: 0px;
      height: 100px;
      background: #ac4b56;  /* fallback for old browsers */
      color: white;
    

      text-align: center;
    }
    header img {
    float: left;
    width: 80px;
    height: 80px;
    }
    
    header h1{
      margin: 10px 0;
    }
    header h2{
      margin: 0 0 10px 0;
    }
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }
  </style>
<body>
  <header>
    <img src="{{asset('img/logo_gs.png')}}" alt="logo">
    <h1>Hoja de Confirmacion Pedido</h1>
    <h3>Decoraciones GS</h3>
  </header>
  <footer>
    <table>
      <tr>
        <td>
            <p class="izq">
              store.decoracionesgs.site
            </p>
        </td>
        <td>
          <p class="page">
            Página
          </p>
        </td>
      </tr>
    </table>
  </footer>

  <div class="container">
    <p><b>Cliente:</b> {{$pedidos->cliente->nombre}}  {{$pedidos->cliente->apellido}}</p>
    <p><b>Telefono:</b> {{$pedidos->cliente->telefono}} </p>
    <div class="row">
      <h3><b>Datos del Pedido</b></h3>
      <div class="col-sm-6">
        <p><b>Codigo de Pedido:</b> {{$pedidos->codigo_pedido}}</p>
        <p><b>Fecha de Pedido:</b> {{$pedidos->fecha_pedido}}</p>
        <p><b>Fecha de Entrega:</b> {{$pedidos->fecha_entrega}}</p>
        <p><b>Estado:</b> {{$pedidos->estado->descripcion}}</p>
      </div>
      <div class="col-sm-6">
        <p><b>Direccion de Entrega:</b> {{$pedidos->direccion_entrega}}</p>
        <p><b>Destinatario:</b> {{$pedidos->destinatario}}</p>
        <p><b>Comentarios Adicionales:</b> {{$pedidos->comentario}}</p>
        <p><b>Total con Envio:</b> L. {{$pedidos->total}}.00</p>
        
      </div>
    </div>
    <div class="row">
      <h2>Detalle del Pedido</h2>
      <table class="table table-sm" id="customers">
        <thead>
            <tr>
              <th scope="col">N°</th>
              <th scope="col">Producto</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>   
          @foreach($detalles as $detalle)
          <tr>
            <td>{{$detalle->linea}}</td>
            <td>{{$detalle->item->titulo}}</td>
            <td>{{$detalle->cantidad}}</td>
            <td>L. {{$detalle->precio}}.00</td>
          </tr>
          @endforeach
        </tbody>
    </table>
    </div>
  </div>
   
    
  
</body>
</html>