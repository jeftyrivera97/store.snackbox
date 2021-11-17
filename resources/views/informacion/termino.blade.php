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
<div class="rounded shadow-sm p-4 bg-white">
                        <div class="osahan-privacy bg-white rounded shadow-sm p-4">
                            <div id="intro" class="mb-4">
                                <!-- Title -->
                                <div class="mb-3">
                                    <h2 class="h5 text-primary">Bienvenidos a Decoraciones G.S</h2>
                                </div>
                                <!-- End Title -->
                                <p>Gracias por utilizar nuestros productos y servicios. Los Servicios son proporcionados por 
                                    Decoraciones G.S, ubicada en la ciudad de La Ceiba, Atlántida, Honduras.
                                </p>
                                <p>Al utilizar nuestros Servicios, acepta estos términos. Por favor, léalas con atención.</p>
                            </div>
                            <div id="services" class="mb-4">
                                <!-- Title -->
                                <div class="mb-3">
                                    <h3 class="h5 text-primary">1. Uso de nuestros servicios</h3>
                                </div>
                                <!-- End Title -->
                                <p>Debe seguir todas las políticas que se le pongan a su disposición dentro de los Servicios.</p>
                                <p>No haga un mal uso de nuestros Servicios. Por ejemplo, no interfiera con nuestros Servicios ni 
                                    intente acceder a ellos utilizando un método que no sea la interfaz y las instrucciones que le 
                                    proporcionamos. Puede usar nuestros Servicios solo según lo permita la ley, incluidas las leyes 
                                    y regulaciones de control de exportación y reexportación aplicables. Podemos suspender o dejar 
                                    de brindarle nuestros Servicios si no cumple con nuestros términos o políticas o si estamos 
                                    investigando una sospecha de conducta indebida.
                                </p>
                                <!-- Title -->
                                <div id="personal-data" class="mb-3 active">
                                    <h4 class="h6 text-primary">A. Datos personales que recopilamos sobre usted.</h4>
                                </div>
                                <!-- End Title -->
                                <p>Los datos personales son cualquier información que se relacione con una persona identificada o 
                                    identificable. Los Datos Personales que nos proporcione directamente a través de nuestros Sitios 
                                    serán evidentes a partir del contexto en el que proporcione los datos. En particular:
                                </p>
                                <ul class="text-secondary">
                                    <li class="pb-2">Cuando se registra para una cuenta Decoraciones G.S, recopilamos su nombre 
                                        completo, dirección de correo electrónico y credenciales de inicio de sesión de la cuenta.</li>
                                    <li class="pb-2">Cuando completa nuestro formulario en línea para ponerse en contacto con nuestro 
                                        equipo de ventas, recopilamos su nombre completo, correo electrónico laboral, país y cualquier 
                                        otra cosa que nos diga sobre su proyecto, necesidades y cronograma.</li>
                                    <li class="pb-2">Cuando utiliza la función "Recordarme" de Decoraciones G.S Checkout, recopilamos 
                                        su dirección de correo electrónico, número de teléfono, dirección, nombres y método de pago 
                                        seleccionado, ya sea “Pagar al entregar” o “Transacción Bancaria”, en esta última se guarda,
                                         el banco elegido para la transferencia y el número de referencia de la transacción.</li>
                                </ul>
                                <p>Cuando responde a los correos electrónicos o encuestas de Decoraciones G.S, recopilamos su dirección 
                                    de correo electrónico, nombre y cualquier otra información que elija incluir en el cuerpo de su correo 
                                    electrónico o respuestas. Si se comunica con nosotros por teléfono, recopilaremos el número de teléfono 
                                    que utiliza para llamar a Decoraciones G.S. Si se comunica con nosotros por teléfono como usuario de 
                                    Decoraciones G.S, podemos recopilar información adicional para verificar su identidad.
                                </p>
                                <!-- Title -->
                                <div id="information" class="mb-3 active">
                                    <h4 class="h6 text-primary">B. Información que recopilamos automáticamente en nuestros Sitio.</h4>
                                </div>
                                <!-- End Title -->
                                <p>También podemos recopilar información sobre sus actividades en línea en sitios web y dispositivos 
                                    conectados a lo largo del tiempo y en sitios web, dispositivos, aplicaciones y otras funciones y 
                                    servicios en línea de terceros. Usamos Google Analytics en nuestro sitio para ayudarnos a analizar 
                                    su uso de nuestro sitio y diagnosticar problemas técnicos.
                                </p>
                                <p>Para obtener más información sobre las cookies que pueden ser servidas a través de nuestros Sitios y 
                                    cómo puede controlar nuestro uso de cookies y análisis de terceros, consulte nuestra Política de cookies.</p>
                            </div>
                            <div id="privacy" class="mb-4">
                                <!-- Title -->
                                <div class="mb-3">
                                    <h3 class="h5 text-primary">2. Protección de la privacidad y los derechos de autor</h3>
                                </div>
                                <!-- End Title -->
                                <p>Las políticas de privacidad de Decoraciones G.S explican cómo tratamos sus datos personales y protegemos 
                                    su privacidad cuando utiliza nuestros Servicios. Al utilizar nuestros Servicios, usted acepta que 
                                    Decoraciones G.S - Plantilla de sitio web para pedidos de alimentos en línea puede usar dichos datos 
                                    de acuerdo con nuestras políticas de privacidad.
                                </p>
                                <p>Respondemos a las notificaciones de presuntas infracciones de derechos de autor y cancelamos las cuentas 
                                    de los infractores reincidentes de acuerdo con el proceso establecido en la Ley de derechos de autor.</p>
                                <p>Proporcionamos información para ayudar a los titulares de derechos de autor a administrar su propiedad 
                                    intelectual en línea. Si cree que alguien está violando sus derechos de autor y desea notificarnos, 
                                    puede encontrar información sobre cómo enviar notificaciones y la política de Decoraciones G.S sobre 
                                    cómo responder a las notificaciones en nuestro apartado de<a href="{{route('/')}}"> contacto.</a>.
                                </p>
                            </div>
                            <div id="yourContent" class="active">
                                <!-- Title -->
                                <div class="mb-3">
                                    <h3 class="h5 text-primary">3. Tu contenido en nuestros servicios</h3>
                                </div>
                                <!-- End Title -->
                                <p>Algunos de nuestros Servicios le permiten cargar, enviar, almacenar, enviar o recibir contenido. 
                                    Usted conserva la propiedad de cualquier derecho de propiedad intelectual que tenga sobre ese contenido. 
                                    En resumen, lo que te pertenece sigue siendo tuyo.</p>
                                <p>Cuando carga, envía, almacena, envía o recibe contenido o a través de nuestros Servicios, le otorga a 
                                    Decoraciones G.S (y a aquellos con quienes trabajamos) una licencia mundial para usar, alojar, 
                                    almacenar, reproducir, modificar, crear trabajos derivados (como los resultantes de traducciones, 
                                    adaptaciones u otros cambios que hacemos para que su contenido funcione mejor con nuestros Servicios), 
                                    comunicar, publicar, realizar públicamente, exhibir públicamente y distribuir dicho contenido.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection
