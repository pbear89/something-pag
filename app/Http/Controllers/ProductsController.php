<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(){
        
        if (request()->has('empty'))
        {
            $products = [];
        } else {
            $pdo = DB::connection()->getPdo();
            $products = DB::select('select * from products where int_activo = 1' );
          
        }
        

        return view('admin_pages.products', 
            [ 'products'=> $products ]
        );

     }
     public function create(){
        echo 'create';
     }
     public function store(Request $request){
        echo 'store';
     }
     public function show($id){
        
        if (request()->has('empty'))
        {
            $products = [];
        } else {
            $pdo = DB::connection()->getPdo();
            $results = DB::select('select * from products where id = :id', 
                    ['id' => $id]
                );

            $images = DB::select('select * from productimages where id_producto = :id', 
                    ['id' => $id]
                );

            $stocks = DB::select('select * from productimages where id_producto = :id', 
                    ['id' => $id]
                );
          
        }
        return view('admin_pages.products.show', 
            [ 'results'=> $results,  'images'=> $images,  'stocks'=> $stocks ]
        );

     }

     public function edit($id){
        return view('admin_pages.products.edit');
     }
     public function update(Request $request, $id){
        echo 'update';
     }
     public function destroy($id){
        echo 'destroy';
     }
}
