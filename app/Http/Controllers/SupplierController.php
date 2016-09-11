<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Supplier;

class SupplierController extends Controller
{
   public function index() {

      $suppliers = Supplier::all();
      $data = [
         'suppliers' => $suppliers,
      ];

      return view('backend.suppliers.index', $data);
   }

   public function create() {
      return view('backend.suppliers.new');
   }

   public function store(Request $request) {

      $this->validate($request, [
         'name' => 'required|string',
         'ruc'  => 'required|unique:suppliers,ruc',
      ]);

      $supplier = new Supplier;

      $name = $request->input('name');
      $ruc  = $request->input('ruc');

      $supplier->name  = $name;
      $supplier->ruc   = $ruc;

      $supplier->save();

      return redirect()->route('suppliers.index')->with('message', 'registered supplier');
   }

   public function edit($id) {

      $supplier = Supplier::find($id);

      $data = [
         'supplier' => $supplier,
      ];

      return view('backend.suppliers.edit', $data);
   }

   public function update($id, Request $request) {

      $this->validate($request, [
         'name' => 'required|string',
         'ruc'  => 'required|unique:suppliers,ruc,'.$id,
      ]);

      $supplier = Supplier::find($id);

      $supplier->name = $request->input('name');
      $supplier->ruc  = $request->input('ruc');

      $supplier->save();

      return redirect()->route('suppliers.index')->with('message', 'updated supplier');
   }

   public function delete($id){

      $supplier = Supplier::find($id);
      $supplier->delete();

      return redirect()->route('suppliers.index')->with('sad_message', 'deleted supplier successfully');
   }
}
