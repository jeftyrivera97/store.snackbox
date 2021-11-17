<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">El cliente {!! $nombre !!} dice:</div><br>
                   <div class="card-body">
                    @if (session('resent'))
                         <div class="alert alert-success" role="alert">
                            {{ __('Un nuevo correo ha sido enviado a tu direccion.') }}
                        </div>
                    @endif
                    {!! $contenido !!}
                </div>
            </div>
        </div>
    </div>
</div>
