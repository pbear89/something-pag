@extends('layouts.master_2')

@section('title','Detalles | Details')

@section('content')

<style>
</style>
<div class="section section-team text-center">
    <div class="container">
               
    <h3 class="title text-info">Nombre del Producto</h3>
    <h5 class=>Categoria</h5>
    <hr>
    <div class="team">
        <div class="row">
            <div class="col-md-12  ml-auto mr-auto">
            
            <div class="row ">
                <div class="col-md-7  ml-auto mr-auto">  
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block" src="{{{ URL::asset('img/bg1.jpg')}}}" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Nature, United States</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="{{{ URL::asset('img/bg3.jpg')}}}" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Somewhere Beyond, United States</h5>
                                </div>
                            </div>        
                            <div class="carousel-item">
                                <img class="d-block" src="{{{ URL::asset('img/bg4.jpg')}}}" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Yellowstone National Park, United States</h5>
                                </div>
                            </div>                            
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="now-ui-icons arrows-1_minimal-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-5 ml-auto mr-auto ">   

                    <!-- Nav tabs -->
                        <div class="card" style="min-height: 423px;">
                            <ul class="nav nav-tabs text-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                         Descripcion
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                         Especificaciones
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                        Reviews
                                    </a>
                                </li>
                            </ul>
                            <div class="card-body">
                                <!-- Tab panes -->
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="home" role="tabpanel">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                    </div>
                                    <div class="tab-pane" id="profile" role="tabpanel">
                                        <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                                    </div>
                                    <div class="tab-pane" id="messages" role="tabpanel">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                    </div>                                    
                                </div>
                            </div>

                            <hr>
                            <button class="btn btn-info btn-round ">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i> 
                                    Solicitar Producto
                            </button>
                            <br>
                        </div>
                
                        
                    </div>
            </div>
            
        </div>
            
    </div>
        </div>
    </div>
</div>
@endsection