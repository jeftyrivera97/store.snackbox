@extends('layouts.app')

@section('title')
<div class="d-none">
    <div class="bg-primary p-3 d-flex align-items-center">
        <a class="toggle togglew toggle-2" href="#"><span></span></a>
        <h4 class="font-weight-bold m-0 text-white">Productos</h4>
    </div>
</div>

@endsection 
@section('content')
    <div class="container">
        <div class="most_popular py-3">
            <div class="d-flex align-items-center mb-4">
                <h3 class="font-weight-bold mb-0" style="color: #e23744;"><Strong><b>{{$descripcion}}</b></Strong></h3>
            </div>
            <div class="row">
                @foreach($productosCategorias as $productoCategoria)
                <div class="col-md-3 pb-3">
                    <form method="POST" action="{{route('cart.store')}}">
                        @csrf
                    <div class="list-card h-100 rounded overflow-hidden position-relative shadow-sm" style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);">
                        <div class="list-card-image">
                            <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-white"  style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);"">{{$productoCategoria->categoria->descripcion}}</span></div>
                            <a>
                                <img alt="#" src="http://admindecoracionesgs.dreamhosters.com/{{$productoCategoria->producto->ruta_imagen}}" style="width:400px; max-width:100%;height:250px;">
                                <input type="text" hidden class="form-control" id="id_item" name="id_item" value="{{$productoCategoria->producto->id_item}}">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a style="color: white;"><b>{{$productoCategoria->producto->titulo}}</b>
                             </a>
                                </h6>
                               <p class=" mb-3"><span class="pr-5" style="color: white;">{{$productoCategoria->producto->descripcion}}</span> <span style="color: white;"><b>L. {{$productoCategoria->producto->precio}}.00</b></span></p>
                            </div>
                            <div><button type="submit" class="btn btn-outline-primary-1" style="background: #000000;"><i class="fas fa-shopping-cart"></i> Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </form>  
                </div>
                @endforeach
            </div>  
        </div>
    </div>
 
@endsection 