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
<section class="charts">
    <div class="container-fluid">   
        <header>
            <h1 class="h3 display"> {{ trans('core.detail') }}</h1>
        </header>

    <div class="row">

            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">{{ trans('core.image')}} / {{ trans('core.images')}}</h2>
                  
                </div>
                <div class="card-body">
                    <img class="img-fluid " src="{{{ URL::asset('img/bg1.jpg')}}}" >
                </div>
              </div>
            </div>

            
            <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h2 class="h5 display display">{{ trans('core.product') }}</h2>
                </div>
                <div class="card-body">                   

                    @forelse ($results as $result)
                        <h5 class="h5 display"> 
                            <strong>  {{trans('core.productcode') }} </strong> : {{ $result->id }}
                        </h5>
                        <h5 class="h5 display"> 
                            <strong> {{trans('core.itemname') }} </strong> : {{ $result->str_nombre }}
                        </h5>
                        <h5 class="h5 display"> 
                            <strong> {{trans('core.category') }} </strong> : {{ $result->id_categories }}
                        </h5>
                        <h2 class="display"> 
                            <strong> {{trans('core.price') }} </strong> : {{ $result->dblprecio }} $
                        </h2>

                        <hr>

                        <a href="{{ route('products.index') }}" class="btn btn-info"> 
                            {{ trans('core.btn_back') }} 
                        </a>
                        <a href="{{ route('products.edit', $result->id) }}" class="btn btn-small btn-warning"> 
                            {{ trans('core.btn_edit') }} 
                        </a> 
                        <a href="{{ route('products.destroy', $result->id) }}" class="btn btn-danger"> 
                            {{ trans('core.btn_remove') }} 
                        </a>
                
                    @empty                    
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h2 class="display">{{trans('core.norecord')}}</h2>
                            </li>  
                        </ul>
                    @endforelse                   

                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection