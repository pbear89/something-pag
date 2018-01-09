@extends('layouts.master')

@section('title','Inicio | Index')

@section('images')
<div class="section section-tabs" >
    <div class="col-md-6 ml-auto mr-auto">
        <h3 class="text text-center">Productos</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12 ml-auto mr-auto">
                
                <!-- Nav tabs -->
                <div class="card">

                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#destacados" role="tab">
                                <i class="now-ui-icons objects_umbrella-13"></i> Productos Destacados
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#nuevos" role="tab">
                                <i class="now-ui-icons shopping_cart-simple"></i> Productos Nuevos
                            </a>
                        </li>
                    </ul>

                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content text-center" >
                            <div class="tab-pane active" id="destacados" role="tabpanel">
                                <div class="team">
                                    <div class="row">
                        @for ($i = 0; $i < 3; $i++)
                                <div class="col-md-4 blockquote blockquote-neutral ">
                                    <div class="team-player"> 
                                        <a href="details"><h4 class="text">NOMBRE PRODUCTO </h4></a>
                                        <a href="catalog"><p class="category text-info">CATEGORIA </p> </a>
                                        <img src="img/bg8.jpg" alt="Thumbnail Image" class="rounded img-fluid img-raised" >
                                        <br><br> 
                                                                                
                                        
                                        <hr>  
                                        <a href="details" class="btn btn-info  btn-round">
                                            DETALLES
                                        </a>
                                    </div>
                                </div>
                        @endfor
                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nuevos" role="tabpanel">
                                <div class="team">
                                    <div class="row">
                        @for ($i = 0; $i < 3; $i++)
                                <div class="col-md-4 blockquote blockquote-neutral ">
                                    <div class="team-player"> 
                                        <a href="details"><h4 class="text">NOMBRE PRODUCTO 1 </h4></a>
                                        <a href="catalog"><p class="category text-info">CATEGORIA </p> </a>
                                        <img src="img/eva.jpg" alt="Thumbnail Image" class="rounded img-fluid img-raised" style="width: 12em;">
                                        <br><br> 
                                                                                
                                        
                                        <hr>  
                                        <a href="details" class="btn btn-info  btn-round">
                                            DETALLES
                                        </a>
                                    </div>
                                </div>                      
                        @endfor                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('instagram')

<div class="section section-tabs"  style="background-image: url('img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12 ml-auto mr-auto">
                <p class="category">Instagram</p>
                <!-- Nav tabs -->
                <div class="card">
                    
                    <div class="card-header">
                        <p class="text text-center">Instagram</p>
                    </div>
                    <div class="card-body">
                            WIDGET DE INSTAGRAM
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Tabs -->
@endsection