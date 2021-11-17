<html>
    <head>
        <style>
            .header{background:#eee;color:#444;border-bottom:1px solid #ddd;padding:10px;}
            .client-detail{background:#ddd;padding:10px;}
            .client-detail th{text-align:left;}
            .items{border-spacing:0;}
            .items thead{background:#ddd;}
            .items tbody{background:#eee;}
            .items tfoot{background:#ddd;}
            .items th{padding:10px;}
            .items td{padding:10px;}
            h1 small{display:block;font-size:16px;color:#888;}
            table{width:100%;}
            .text-right{text-align:right;}

            .header img {
            float: left;
            width: 80px;
            height: 80px;
            }
        </style>
    </head>
    <body>

    <div class="header">
        <img src="{{asset('img/logo_gs.png')}}" alt="logo">
        <h1>{{$empresa->descripcion}} <small> {{$empresa->razon_social}} </small></h1>
        <h4>R.T.N.:{{$empresa->codigo_empresa}}
       <br> DIRECCION:{{$empresa->direccion}}
       <br> TEL.:(504) {{$empresa->telefono}}
      <br>  Correo Electronico: {{$empresa->correo}}
       <br> C.A.I.:{{$empresa->cai}}
      <br>  RANGO AUTORIZADO: 002-001-01-0000000{{$folio->inicio}} AL 002-001-01-000000{{$folio->final}}
       <br> FECHA LIMITE DE EMISION: {{$folio->fecha_inicial}}</h4>
        <h1>
            Factura No. 000-001-01-{{ str_pad ($factura->codigo_factura, 7, '0', STR_PAD_LEFT) }}
            <small>
                Emitido el {{$factura->fecha}}
            </small>
        </h1>
    </div>
    <table class="client-detail">
        <tr>
            <th style="width:100px;">
                Cliente
            </th>
            <td>{{$venta->cliente->razon_social}}</td>
        </tr>
        <tr>
            <th>R.T.N.</th>
            <td>{{$venta->cliente->rtn}}</td>
        </tr>
    </table>

    <hr />

    <table class="items">
        <thead>
            <tr>
                <th class="text-left">Producto</th>
                <th class="text-right" style="width:100px;">Cantidad</th>
                <th class="text-right" style="width:100px;">Precio Unitario</th>
                <th class="text-right" style="width:100px;">Subtotal</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detalles as $detalle)
            <tr>
                <td>{{$detalle->item->titulo}}</td>
                <td class="text-right">{{$detalle->cantidad}}</td>
                <td class="text-right">L. {{number_format($detalle->precio, 2)}}</td>
                <td class="text-right">L. {{number_format($detalle->subtotal_linea, 2)}}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" class="text-right"><b>Envio</b></td>
                <td class="text-right">L. {{ number_format(50, 2) }}</td>
            </tr>
            <tr>
                <td colspan="3" class="text-right"><b>Descuentos</b></td>
                <td class="text-right">L. {{ number_format($factura->descuento, 2) }}</td>
            </tr>
            <tr>
                <td colspan="3" class="text-right"><b>Importe Gravado 15%</b></td>
                <td class="text-right">L. {{ number_format($factura->gravado15, 2) }}</td>
            </tr>
        <tr>
            <td colspan="3" class="text-right"><b>I.S.V. 15%</b></td>
            <td class="text-right">L. {{ number_format($factura->impuesto15, 2) }}</td>
        </tr>
        <tr>
            <td colspan="3" class="text-right"><b>Sub Total</b></td>
            <td class="text-right">L. {{ number_format($factura->total, 2) }}</td>
        </tr>
       
        <tr>
            <td colspan="3" class="text-right"><b>Total</b></td>
            <td class="text-right">L. {{ number_format($factura->total, 2) }}</td>
        </tr>
        </tfoot>
    </table>
    <h5>
        <b>VALOR EN LETRAS:</b>
        <small>
            {{$factura->total_letras}}
        </small>
    </h5>
    <h5> LA FACTURA ES BENEFICIO DE TODOS "EXIJALA" </h5>
    <h5>N° Correlativo de Orden de compra exenta _____
       <br> N° Correlativo de constancia de registro exonerado _____
       <br> N° identificativo del registro de la SAG _____</h5>
       <p>ORIGINAL: CLIENTE</p>                
        <p>COPIA: EMISOR</p>
    </body>
</html>