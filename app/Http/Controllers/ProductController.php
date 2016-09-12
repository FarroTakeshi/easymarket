<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Product;
use App\Models\Area;

class ProductController extends Controller
{
   public function index() {

      $products = Product::all();

      $data = [
         'products' => $products,
      ];

      return view('backend.warehouse.products.index', $data);
   }

   public function create() {

      $areas = Area::all();

      $data = [
         'areas' => $areas,
      ];

      return view('backend.warehouse.products.new', $data);
   }

   public function store(Request $request) {

      $this->validate($request, [
         'name'        => 'required|string',
         'price'       => 'required|numeric',
         'stock'       => 'required|numeric',
         'description' => 'required|string',
         'area'        => 'required',
      ]);

      $product = new Product;

      $name        = $request->input('name');
      $price       = $request->input('price');
      $stock       = $request->input('stock');
      $description = $request->input('description');
      $area_id     = $request->input('area');

      $product->name         = $name;
      $product->price        = $price;
      $product->stock        = $stock;
      $product->description  = $description;
      $product->area_id      = $area_id;
      $product->warehouse_id = 1;

      $product->save();

      return redirect()->route('warehouse.products.index', ['warehouse' => 1 ])->with('message', 'registered product');
   }

   public function edit($id) {

      $product = Product::find($id);
      $areas = Area::all();

      $data = [
         'product' => $product,
         'areas'   => $areas,
      ];

      return view('backend.warehouse.products.edit', $data);
   }

   public function update($id, Request $request) {

      $this->validate($request, [
         'name'        => 'required|string',
         'price'       => 'required|numeric',
         'stock'       => 'required|numeric',
         'description' => 'required|string',
         'area'        => 'required',
      ]);

      $product = Product::find($id);

      $name        = $request->input('name');
      $price       = $request->input('price');
      $stock       = $request->input('stock');
      $description = $request->input('description');
      $area_id     = $request->input('area');

      $product->name         = $name;
      $product->price        = $price;
      $product->stock        = $stock;
      $product->description  = $description;
      $product->area_id      = $area_id;
      $product->warehouse_id = 1;

      $product->save();

      return redirect()->route('warehouse.products.index', ['warehouse' => 1 ])->with('message', 'updated product');
   }

   public function delete($id){

      $product = Product::find($id);
      $product->delete();

      return redirect()->route('warehouse.products.index', ['warehouse' => 1 ])->with('sad_message', 'deleted product successfully');
   }
}
