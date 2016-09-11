<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Area;

class AreaController extends Controller
{
   public function index() {

      $areas = Area::all();
      $data = [
         'areas' => $areas,
      ];

      return view('backend.areas.index', $data);
   }

   public function create() {
      return view('backend.areas.new');
   }

   public function store(Request $request) {

      $this->validate($request, [
         'name'        => 'required|string',
         'description' => 'required|string',
      ]);

      $area = new Area;

      $name        = $request->input('name');
      $description = $request->input('description');

      $area->name        = $name;
      $area->description = $description;

      $area->save();

      return redirect()->route('areas.index')->with('message', 'registered area');
   }

   public function edit($id) {

      $area = Area::find($id);

      $data = [
         'area' => $area,
      ];

      return view('backend.areas.edit', $data);
   }

   public function update($id, Request $request) {

      $this->validate($request, [
         'name'        => 'required|string',
         'description' => 'required|string',
      ]);

      $area = Area::find($id);

      $area->name        = $request->input('name');
      $area->description = $request->input('description');

      $area->save();

      return redirect()->route('areas.index')->with('message', 'updated area');
   }

   public function delete($id){

      $area = Area::find($id);
      $area->delete();

      return redirect()->route('areas.index')->with('sad_message', 'deleted area successfully');
   }
}
