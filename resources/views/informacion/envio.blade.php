@extends('layouts.app')
@section('title')
<div class="d-none">
    <div class="bg-primary border-bottom p-3 d-flex align-items-center">
        <a class="toggle togglew toggle-2" href="#"><span></span></a>
        <h4 class="font-weight-bold m-0 text-white">Decoraciones G.S</h4>
    </div>
</div>
@endsection 
@section('content')
<div class="osahan-trending">
    <!-- profile -->
    <div class="container">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
            <br><br>
                <div class=" rounded shadow-sm sticky_sidebar overflow-hidden">
                    <!-- profile-details -->
                    <div class="profile-details" style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);">
                        <a href="https://api.whatsapp.com/send?phone=+50499971235&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Decoraciones G.S" target="blank" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-white"><i class="fab fa-whatsapp bg-success text-white p-2 rounded-circle mr-2"></i> Whatsapp</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="https://www.instagram.com/decoraciones_gs/" target="blank" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-white"><i class="fab fa-instagram bg-white text-dark p-2 rounded-circle mr-2"></i> Instagram</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="https://www.facebook.com/pages/category/Product-Service/Decoraciones-GS-100398268483424/" target="blank" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-white"><i class="fab fa-facebook-f bg-info text-white p-2 rounded-circle mr-2"></i> Facebook</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="{{route('terminos')}}" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-info bg-white text-dark p-2 rounded-circle mr-2"></i> Terminos de Uso</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="{{route('politicas')}}" class="d-flex w-100 align-items-center px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-lock bg-warning text-white p-2 rounded-circle mr-2"></i> Politicas de Privacidad</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-8 mb-3">
                   
                        <div id="basics">
                            <!-- Title -->
                            <div class="mb-2">
                                <h5 class="font-weight-bold mb-0 text-center">Formas de Pago</h5>
                            </div>
                            <!-- End Title -->
                            <!-- Basics Accordion -->
                            <div id="basicsAccordion">
                                <!-- Card -->
                                <div class="box border-bottom mb-2 rounded shadow-sm overflow-hidden" style="background: #000000;">
                                    <div id="basicsHeadingOne">
                                        <h5 class="mb-0">
                                            <button class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed text-white" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                                    ¿Cuáles son las formas de pago?
                                    <span class="card-btn-arrow">
                                    <span class="feather-chevron-down"></span>
                                    </span>
                                    </button>
                                        </h5>
                                    </div>
                                    <div id="basicsCollapseOne" class="collapse show text-white" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                        <div class="card-body border-top p-3 text-muted text-white">
                                        <p class="text-white">Cualquier compra de nuestra tienda online se puede pagar por transacción bancaria o por pago a la hora de entrega.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box border-bottom mb-2 rounded shadow-sm overflow-hidden" style="background: #000000;">
                                    <div id="basicsHeadingTwo">
                                        <h5 class="mb-0">
                                            <button class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed text-white" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                            Si pago por transferencia, ¿tardaré más en recibir mi compra?
                                    <span class="card-btn-arrow">
                                    <span class="feather-chevron-down"></span>
                                    </span>
                                    </button>
                                        </h5>
                                    </div>
                                    <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion" style="">
                                        <div class="card-body border-top p-3 text-muted">
                                        <p class="text-white">Al pagar por transferencia, el pago puede demorarse hasta 48 horas en días laborables. El pedido se procesara en el momento en el que el dinero sea recibido en nuestra cuenta.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box border-bottom mb-2 rounded shadow-sm overflow-hidden" style="background: #000000;">
                                    <div id="basicsHeadingThree">
                                        <h5 class="mb-0">
                                            <button class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed text-white" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                            ¿Cuánto tardará mi compra en llegar?
                                    <span class="card-btn-arrow">
                                    <span class="feather-chevron-down"></span>
                                    </span>
                                    </button>
                                        </h5>
                                    </div>
                                    <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion" style="">
                                        <div class="card-body border-top p-3 text-muted">
                                        <p class="text-white">Cada día salen todos los pedidos que entran con dos dias antes de pedidos y se entregan una vez confirmado con el cliente por medio del soporte de seguimiento. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box border-bottom mb-2 rounded shadow-sm overflow-hidden" style="background: #000000;">
                                    <div id="basicsHeadingFour">
                                        <h5 class="mb-0">
                                            <button class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3 text-white" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                            ¿Con quién debo contactar en caso de que el producto me llegue mal?
                                    <span class="card-btn-arrow">
                                    <span class="feather-chevron-down"></span>
                                    </span>
                                    </button>
                                        </h5>
                                    </div>
                                    <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion">
                                        <div class="card-body border-top p-3 text-muted">
                                        <p class="text-white">En este caso debes contactar directamente con nosotros para tratar el problema y llegar a la mejor solución. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box border-bottom mb-2 rounded shadow-sm overflow-hidden" style="background: #000000;">
                                    <div id="basicsHeadingFive">
                                        <h5 class="mb-0">
                                            <button class="shadow-none btn btn-block d-flex justify-content-between card-btn collapsed p-3 text-white" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false" aria-controls="basicsCollapseFive">
                                            ¿Qué plazo tengo para devoluciones?
                                    <span class="card-btn-arrow">
                                    <span class="feather-chevron-down"></span>
                                    </span>
                                    </button>
                                        </h5>
                                    </div>
                                    <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion">
                                        <div class="card-body border-top p-3 text-muted">
                                        <p class="text-white">No se aceptan devoluciones en la compra de cualquier producto de nuestra tienda. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>
                            <!-- End Basics Accordion -->
                        </div>
                       
            </div>
        </div>
    </div>
</div>
@endsection