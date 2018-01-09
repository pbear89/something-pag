@extends('layouts.master_2')

@section('title','Como Comprar | How Buy')

<style>
    .paso_paso{
        background: #ffffffc4;
        z-index: 10;
        margin-top: 2em;
    }
</style>
@section('content')
    <div class="section section-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">¿Como Comprar?</h2>
                    <h5 class="description"> Comprar en nuestra tienda es súper sencillo, intuitivo y rápido, aunque en en el siguiente texto veas muchos puntos, ¡No te asustes! 
                        Es simplemente para explicarte el proceso paso a paso.</h5>


                </div>
            </div>
            <div class="separator separator-primary"></div>
            <div class="section-story-overview">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container image-left" style="background-image: url('img/login.jpg')">
                            <!-- First image on the left side -->
                            <p class="blockquote blockquote-primary">"Over the span of the satellite record, Arctic sea ice has been declining significantly, while sea ice in the Antarctichas increased very slightly"
                                <br>
                                <br>
                                <small>-NOAA</small>
                            </p>
                        </div>
                        <!-- Second image on the left side of the article -->
                        <!-- <div class="image-container" style="background-image: url('img/bg3.jpg')"></div> -->
                    </div>
                    <div class="col-md-5">
                        <!-- First image on the right side, above the article -->
                        <!-- <div class="image-container image-right" style="background-image: url('img/bg1.jpg')"></div> -->
                        <div class="col-md-12 blockquote paso_paso" >
                        <h3>Paso a Paso</h3>
                        <p>
                            <ul>  
                                <li>
                                    <strong>Navega</strong>  en nuestra tienda y ubica tu producto, puedes hacer click en el, para ver más detalles.
                                </li>    
                                <li>
                                    <strong> Selecciona</strong> los atributos de tu producto según su caso, ejemplo: color, cantidad, etc.
                                </li>    
                                <li>
                                    <strong>Añade</strong> a tu Carrito de Compras.
                                </li>    
                                <li>
                                    <strong>Dirigete</strong> al Carrito de Compras.
                                </li>    
                            </ul>  
5 - Regístrate o Ingresa en tu cuenta.

6 - Ahora procede a completar tus pasos para que tu compra pueda ser procesada, es importante que completes esta sección para que podamos tener todos tus datos y poder realizar un envío exitoso.
                        </p>
                        <p>
                            For a start, it does not automatically follow that a record amount of ice will melt this summer. More important for determining the size of the annual thaw is the state of the weather as the midnight sun approaches and temperatures rise. But over the more than 30 years of satellite records, scientists have observed a clear pattern of decline, decade-by-decade.
                        </p>
                        <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
