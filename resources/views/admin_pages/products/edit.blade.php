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
            <h1 class="h3 display"> {{ trans('core.detail') }}</h1>
        </header>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h2 class="h5 display display">{{ trans('core.products') }}</h2>
                </div>
                <div class="card-body">

                <ul class="list-group">
                    <div class="col-md-4">
                        <a href="{{ route('products.index') }}" class="btn btn-info"> 
                        {{ trans('core.btn_back') }} 
                        </a>
                    </div>
                       
                                                 
                </ul><br>

                    <p>{{ trans('core.detail') }}</p>
                    
                    <ul class="list-group">

                    @forelse ($results as $result)
                    <li class="list-group-item">
                        <div class="col-md-12">

                            <h2 class="display"> 
                                <strong>  {{trans('core.productcode') }} </strong> : {{ $result->id }}
                            </h2>
                            <h2 class="display"> 
                                <strong> {{trans('core.itemname') }} </strong> : {{ $result->str_nombre }}
                            </h2>
                            <h2 class="display"> 
                                <strong> {{trans('core.category') }} </strong> : {{ $result->id_categories }}
                            </h2>
                            <h2 class="display"> 
                                <strong> {{trans('core.price') }} </strong> : {{ $result->dblprecio }} $
                            </h2>

                        </div>
                                 
                    </li>

                        @empty
                            <li class="list-group-item">
                                <h2 class="display">{{trans('core.norecord')}}</h2>
                            </li>  

                        @endforelse 
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection