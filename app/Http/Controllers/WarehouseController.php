<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Warehouse;

class WarehouseController extends Controller
{
   public function index() {

      $warehouse = Warehouse::find(1);
      $data = [
         'warehouse' => $warehouse,
      ];

      return view('backend.warehouse.index', $data);
   }

   public function edit($id) {

      $warehouse = Warehouse::find($id);

      $data = [
         'warehouse' => $warehouse,
      ];

      return view('backend.warehouse.edit', $data);
   }

   public function update($id, Request $request) {

      $this->validate($request, [
         'name'    => 'required|string',
         'address' => 'required|string',
      ]);

      $warehouse = Warehouse::find($id);

      $warehouse->name    = $request->input('name');
      $warehouse->address = $request->input('address');

      $warehouse->save();

      return redirect()->route('warehouse.index')->with('message', 'updated warehouse');
   }
}
