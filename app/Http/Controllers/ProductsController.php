<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        
        if (request()->has('empty'))
        {
            $products = [];
        } else {
            // $products = Product::all();
            $products = [
                'Producto 1',
                'Producto 2',
                'Producto 3',
                'Producto 4',
                'Producto 5',
            ];
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
        echo 'show';
     }
     public function edit($id){
        return view('admin_pages.products');
     }
     public function update(Request $request, $id){
        echo 'update';
     }
     public function destroy($id){
        echo 'destroy';
     }
}
