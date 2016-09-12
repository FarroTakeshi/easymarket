@extends('backend.layout.base')

@section('content')

@if( session()->has('message') )
<div class="row">
   <div class="alert alert-success">
      {{ session('message') }}
   </div>
</div>
@endif

@if( session('sad_message') )
<div class="row">
   <div class="alert alert-danger">
      {{session('sad_message') }}
   </div>
</div>
@endif

<div class="row">
   <div class="row">
   <div class="col-xs-12">
      <h2>Areas</h2>
   </div>
</div>

   <table class="table">
      <thead>
         <th>Name</th>
         <th>Description</th>
         <th>Actions</th>
      </thead>
      <tbody>
         @foreach($areas as $area)
         <tr>
            <td>{{ $area->name }}</td>
            <td>{{ $area->description }}</td>
            <td>
               <a class="btn btn-default" href="{{ route('areas.edit', ['id' => $area->id]) }}">Edit</a>
               <a class="btn btn-danger" id="delete_button" href="{{ route('areas.delete', ['id' => $area->id]) }}" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>

</div>

<div class="row">
   <div class="form-group">
      <a href="{{ route('areas.create', ['area' => $area->id ]) }}" class="btn btn-success">Add</a>
   </div>
</div>

@endsection