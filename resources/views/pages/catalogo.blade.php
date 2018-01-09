@extends('layouts.master_2')

@section('title','Catalogo | Catalogue')

@section('content')

<style>
    .blockquote {

    }
</style>
<div class="section section-team text-center">
    <div class="container">
        <h2 class="title">Nuestro Catalogo</h2>
        <div class="team">
            <div class="row">

                <div class="col-md-4 blockquote img-raised">
                    <div class="team-player">
                        
                        <h4 class="text">NOMBRE PRODUCTO </h4>
                        
                        <p class="category text-primary">CATEGORIA </p>

                        <img src="img/ryan.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                        <hr>
                        <p class="description">DESCRIPCION BREVE -> You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                            <a href="#">links</a> for people to be able to follow them outside the site.</p>

                        <a href="#pablo" class="btn btn-primary  btn-round">
                            DETALLES
                        </a>
                    </div>
                </div>
                <div class="col-md-4 blockquote ">
                    <div class="team-player">
                        <h4 class="text">NOMBRE PRODUCTO </h4>                        
                        <p class="category text-primary">CATEGORIA </p>

                        <img src="img/eva.jpg" alt="Thumbnail Image" class="rounded img-fluid img-raised">
                        <hr>
                        <p class="description">DESCRIPCION BREVE -> You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                            <a href="#">links</a> for people to be able to follow them outside the site.</p>

                        <a href="#pablo" class="btn btn-default  btn-round">
                            DETALLES
                        </a>
                    </div>
                </div>
                <div class="col-md-4 blockquote blockquote-neutral img-raised">
                    <div class="team-player">
                        <h4 class="text">NOMBRE PRODUCTO </h4>
                                              
                        <img src="img/eva.jpg" alt="Thumbnail Image" class="rounded img-fluid img-raised">
                        <br><br><p class="category text-info">CATEGORIA </p>
                        <hr> 
                        

                        <p class="description">DESCRIPCION BREVE -> You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                            <a href="#">links</a> for people to be able to follow them outside the site.</p>

                        <a href="#pablo" class="btn btn-info  btn-round">
                            DETALLES
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection