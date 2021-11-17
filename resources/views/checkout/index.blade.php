@extends('layouts.app')
@section('content')
</header>
    <div class="osahan-checkout">
        <div class="d-none">
            <div class="bg-primary border-bottom p-3 d-flex align-items-center">
                <a class="toggle togglew toggle-2" href="#"><span></span></a>
                <h4 class="font-weight-bold m-0 text-white">Carrito</h4>
            </div>
        </div>
        <!-- checkout -->
        <div class="container position-relative">
            <div class="py-5 row">
                <div class="col-md-8 mb-3">
                    <div>
                        <div class="osahan-cart-item mb-3 rounded shadow-sm bg-white overflow-hidden">
                            <div class="osahan-cart-item-profile bg-white p-3">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 font-weight-bold">Dirección de Entrega </h6>
                                    <div class="row">
                                        <div class="custom-control col-lg-6 custom-radio mb-3 position-relative border-custom-radio">
                                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                                            <label class="custom-control-label w-100" for="customRadioInline1">
                                       <div>
                                          <div class="p-3 bg-white rounded shadow-sm w-100">
                                             <div class="d-flex align-items-center mb-2">
                                                <h6 class="mb-0">Destino 1</h6>
                                                <p class="mb-0 badge badge-success ml-auto"><i class="icofont-check-circled"></i>Principal</p>
                                             </div>
                                             <p class="small text-muted m-0">xxx xxxx xxx </p>
                                             <p class="small text-muted m-0">xxx xxx, xxx xx</p>
                                          </div>
                                          <a href="#"  data-toggle="modal" data-target="#exampleModal" class="btn btn-block btn-light border-top">Editar</a>
                                       </div>
                                    </label>
                                        </div>
                                        <div class="custom-control col-lg-6 custom-radio position-relative border-custom-radio">
                                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label w-100" for="customRadioInline2">
                                       <div>
                                          <div class="p-3 rounded bg-white shadow-sm w-100">
                                             <div class="d-flex align-items-center mb-2">
                                                <h6 class="mb-0">Destino 2</h6>
                                                <p class="mb-0 badge badge-light ml-auto"><i class="icofont-check-circled"></i>Alternantiva</p>
                                             </div>
                                             <p class="small text-muted m-0">xxxx xxxx, xxxxxx</p>
                                             <p class="small text-muted m-0">xxxx xxxx, xxx</p>
                                          </div>
                                          <a href="#"  data-toggle="modal" data-target="#exampleModal" class="btn btn-block btn-light border-top">Editar</a>
                                       </div>
                                    </label>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleModal"> Agregar Nueva Dirección </a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion mb-3 rounded shadow-sm bg-white overflow-hidden" id="accordionExample">
                            <div class="osahan-card bg-white border-bottom overflow-hidden">
                                <div class="osahan-card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <i class="feather-credit-card mr-3"></i> Tarjeta de Credito/Debito
                                 <i class="feather-chevron-down ml-auto"></i>
                                 </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="osahan-card-body border-top p-3">
                                        <h6 class="m-0">Agregar Datos</h6>
                                        <p class="small">ACEPTAMOS <span class="osahan-card ml-2 font-weight-bold">( Master Card / Visa )</span></p>
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-12 form-group">
                                                    <label class="form-label font-weight-bold small">Numero de Tarjeta</label>
                                                    <div class="input-group">
                                                        <input placeholder="Numero de Tarjeta" type="number" class="form-control">
                                                        <div class="input-group-append"><button type="button" class="btn btn-outline-secondary"><i class="feather-credit-card"></i></button></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 form-group"><label class="form-label font-weight-bold small">Valid through(MM/YY)</label><input placeholder="Ingresar Valid through(MM/YY)" type="number" class="form-control"></div>
                                                <div class="col-md-4 form-group"><label class="form-label font-weight-bold small">CVV</label><input placeholder="Ingresar Numero CVV" type="number" class="form-control"></div>
                                                <div class="col-md-12 form-group"><label class="form-label font-weight-bold small">Nombre en la Tarjeta</label><input placeholder="Ingresar Nombre en la Tarjeta" type="text" class="form-control"></div>
                                                <div class="col-md-12 form-group mb-0">
                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="custom-checkbox1" class="custom-control-input"><label title="" type="checkbox" for="custom-checkbox1" class="custom-control-label small pt-1">Guarde de forma segura esta tarjeta para una compra más rápida la próxima vez</label></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="osahan-card bg-white border-bottom overflow-hidden">
                                <div class="osahan-card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <i class="feather-globe mr-3"></i> PayPal
                                 <i class="feather-chevron-down ml-auto"></i>
                                 </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="osahan-card-body border-top p-3">
                                        <form>
                                            <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                                <label class="btn btn-outline-secondary active">
                                       <input type="radio" name="options" id="option1" checked> 
                                       </label>
                                                <label class="btn btn-outline-secondary">
                                       <input type="radio" name="options" id="option2"> 
                                       </label>
                                                <label class="btn btn-outline-secondary">
                                       <input type="radio" name="options" id="option3"> 
                                       </label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-12 form-group mb-0">
                                                    <label class="form-label small font-weight-bold">...</label><br>
                                                    <select class="custom-select form-control">
                                             <option>1</option>
                                             <option>2</option>
                                             <option>3</option>
                                             <option>3</option>
                                          </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="osahan-card bg-white border-bottom overflow-hidden">
                                <div class="osahan-card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <i class="feather-globe mr-3"></i> Transferencia Bancaria
                                 <i class="feather-chevron-down ml-auto"></i>
                                 </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="osahan-card-body border-top p-3">
                                        <form>
                                            <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                                <label class="btn btn-outline-secondary active">
                                       <input type="radio" name="options" id="option1" checked> 
                                       </label>
                                                <label class="btn btn-outline-secondary">
                                       <input type="radio" name="options" id="option2"> 
                                       </label>
                                                <label class="btn btn-outline-secondary">
                                       <input type="radio" name="options" id="option3"> 
                                       </label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-12 form-group mb-0">
                                                    <label class="form-label small font-weight-bold">...</label><br>
                                                    <select class="custom-select form-control">
                                             <option>1</option>
                                             <option>2</option>
                                             <option>3</option>
                                             <option>3</option>
                                          </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="osahan-card bg-white overflow-hidden">
                                <div class="osahan-card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 <i class="feather-dollar-sign mr-3"></i> Dinero al entregar
                                 <i class="feather-chevron-down ml-auto"></i>
                                 </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body border-top">
                                        <h6 class="mb-3 mt-0 mb-3 font-weight-bold">Efectivo</h6>
                                        <p class="m-0">Tenga el cambio exacto a mano para ayudarnos a brindarle un mejor servicio.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                        <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
                            <img alt="osahan" src="img/starter1.jpg" class="mr-3 rounded-circle img-fluid">
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 font-weight-bold">Combo X</h6>
                                <p class="mb-0 small text-muted"><i class="feather-map-pin"></i> X-X-XX-XXX</p>
                            </div>
                        </div>
                        <div class="bg-white border-bottom py-2">
                            <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                                <div class="media align-items-center">
                                    <div class="mr-2 text-danger">&middot;</div>
                                    <div class="media-body">
                                        <p class="m-0">Snicker</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="count-number float-right"><button type="button" class="btn-sm left dec btn btn-outline-secondary"> <i class="feather-minus"></i> </button><input class="count-number-input" type="text" readonly="" value="2"><button type="button" class="btn-sm right inc btn btn-outline-secondary"> <i class="feather-plus"></i> </button></span>
                                    <p class="text-gray mb-0 float-right ml-2 text-muted small">L.XX.XX</p>
                                </div>
                            </div>
                            <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                                <div class="media align-items-center">
                                    <div class="mr-2 text-danger">&middot;</div>
                                    <div class="media-body">
                                        <p class="m-0">Snicker
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="count-number float-right"><button type="button" class="btn-sm left dec btn btn-outline-secondary"> <i class="feather-minus"></i> </button><input class="count-number-input" type="text" readonly="" value="2"><button type="button" class="btn-sm right inc btn btn-outline-secondary"> <i class="feather-plus"></i> </button></span>
                                    <p class="text-gray mb-0 float-right ml-2 text-muted small">L.XX.XX</p>
                                </div>
                            </div>
                            <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                                <div class="media align-items-center">
                                    <div class="mr-2 text-danger">&middot;</div>
                                    <div class="media-body">
                                        <p class="m-0">Snicker
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="count-number float-right"><button type="button" class="btn-sm left dec btn btn-outline-secondary"> <i class="feather-minus"></i> </button><input class="count-number-input" type="text" readonly="" value="2"><button type="button" class="btn-sm right inc btn btn-outline-secondary"> <i class="feather-plus"></i> </button></span>
                                    <p class="text-gray mb-0 float-right ml-2 text-muted small">L.XX.XX</p>
                                </div>
                            </div>
                            <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                                <div class="media align-items-center">
                                    <div class="mr-2 text-success">&middot;</div>
                                    <div class="media-body">
                                        <p class="m-0">Snicker
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="count-number float-right"><button type="button" class="btn-sm left dec btn btn-outline-secondary"> <i class="feather-minus"></i> </button><input class="count-number-input" type="text" readonly="" value="2"><button type="button" class="btn-sm right inc btn btn-outline-secondary"> <i class="feather-plus"></i> </button></span>
                                    <p class="text-gray mb-0 float-right ml-2 text-muted small">L.XX.XX</p>
                                </div>
                            </div>
                            <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2">
                                <div class="media align-items-center">
                                    <div class="mr-2 text-success">&middot;</div>
                                    <div class="media-body">
                                        <p class="m-0">Snicker</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="count-number float-right"><button type="button" class="btn-sm left dec btn btn-outline-secondary"> <i class="feather-minus"></i> </button><input class="count-number-input" type="text" readonly="" value="2"><button type="button" class="btn-sm right inc btn btn-outline-secondary"> <i class="feather-plus"></i> </button></span>
                                    <p class="text-gray mb-0 float-right ml-2 text-muted small">L.XX.XX</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-3 py-3 border-bottom clearfix">
                            <div class="input-group-sm mb-2 input-group">
                                <input placeholder="Codigo" type="text" class="form-control">
                                <div class="input-group-append"><button type="button" class="btn btn-primary"><i class="feather-percent"></i> Aplicar</button></div>
                            </div>
                            <div class="mb-0 input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="feather-message-square"></i></span></div>
                                <textarea placeholder="Comentarios..." aria-label="With textarea" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="bg-white p-3 clearfix border-bottom">
                            <p class="mb-1">Subtotal <span class="float-right text-dark">L. XX.XX</span></p>
                            <p class="mb-1">IVA<span class="float-right text-dark">L. XX.XX</span></p>
                            <p class="mb-1">Cargo de envio<span class="text-info ml-1"><i class="feather-info"></i></span><span class="float-right text-dark">L. XX.XX</span></p>
                            <p class="mb-1 text-success">Descuento<span class="float-right text-success">L. XX.XX</span></p>
                            <hr>
                            <h6 class="font-weight-bold mb-0">Total <span class="float-right">L. XXXX.XX</span></h6>
                        </div>
                        <div class="p-3">
                            <a class="btn btn-success btn-block btn-lg" href="successful.html">ACEPTAR<i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
