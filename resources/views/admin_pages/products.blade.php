@extends('layouts.admin')

@section('title','Admin Inicio | Admin Index')
@section('pagtitle','Admin Home | Admin Home')

@section('content')
<style>
    a {
    color: #1863b1;
    text-decoration: none;
}
</style>
<section class="forms">
    <div class="container-fluid">   
        <header>
            <h1 class="h3 display"> {{ trans('core.products') }} - ¿Que deseas Hacer?</h1>
        </header>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h2 class="h5 display display">{{ trans('core.products') }}</h2>
                </div>
                <div class="card-body">

                    <p>{{ trans('core.listaproductos') }}</p>
                    
                        <ul class="list-group">

                        @forelse ($products as $product)

                            <li class="list-group-item">{{$product}}</li>
                        @empty
                            <li class="list-group-item">
                                <h2>{{trans('core.norecord')}}</h2>
                            </li>  

                        @endforelse                
                    </ul>

                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h2 class="h5 display display">Compras</h2>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <ul class="list-group">
                    <li class="list-group-item"><a href="compras_lista.php"><i class="fa fa-list-alt" aria-hidden="true"></i> Listado de Compras</a></li>
                    <li class="list-group-item"><a href="reportes_lista.php"><i class="fa fa-list-ol" aria-hidden="true"></i> Listado de Reportes de Pago</a></li>
                    <li class="list-group-item"><a href="envios_lista.php"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Reportar Envios</a></li>
                  </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h2 class="h5 display display"> Información Bancaria</h2>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="bancos_lista.php"><i class="fa fa-university"></i> Listado de Bancos</a></li>
                        <li class="list-group-item"><a href="cuentas_lista.php"><i class="fa fa-book fa-fw"></i> Listado de Cuentas</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        
    </div>
</div>
</section>
@endsection