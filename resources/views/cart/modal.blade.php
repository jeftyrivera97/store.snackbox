<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Procesar Pago</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card card-info">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-12">
                        <label>Total Pedido</label>
                        <input type="text" class="form-control input-rounded" readonly value=" L. {{Cart::getTotal()+50}}" id="total" name="total" disabled >
                      </div>
                  </div>
                      <div class="row">
                        <div class="form-group col-md-12">
                            <label>Metodo de Pago</label>
                            <select class="custom-select form-control" name="tipo_pago" id="tipo_pago" required >
                                <option value="">Seleccione..</option>
                                <option value="1">Deposito a Cuenta (100% Requerido)</option>
                            </select>
                          </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-12">
                            <label>Banco de Deposito</label>
                            <select class="custom-select form-control" name="id_cuenta" id="id_cuenta" disabled required>
                                <option value="">Seleccione..</option>
                                @foreach($cuentas as $cuenta)
                                <option value="{{$cuenta->id_cuenta}}">{{$cuenta->codigo_cuenta}} {{$cuenta->banco}}</option>
                                @endforeach
                            </select>
                          </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                            <label>N° Referencia Transaccion</label>
                            <input type="text" class="form-control input-rounded" id="numero_referencia" name="numero_referencia" disabled required >
                          </div>
                         
                          <div class="form-group col-md-6">
                            <label>Monto de Transferencia</label>
                            <input type="text" class="form-control input-rounded" id="monto" name="monto" readonly value="L. {{Cart::getTotal()+50}}" >
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label>Comprobante:</label><br>
                              <input type="file" name="img" id="img" required focus >
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" style="background: #000000;" data-dismiss="modal">Cancelar Pedido</button>
          <button type="submitt" id="procesar" class="btn btn-primary">Confirmar Pedido</button>
        </div>
      </div>
    </div>
  </div>

  <script type="application/javascript" src="{{ asset('js/modal.js')}}"></script>