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
      <h2>Suppliers</h2>
   </div>
</div>

   <table class="table">
      <thead>
         <th>Name</th>
         <th>RUC</th>
         <th>Actions</th>
      </thead>
      <tbody>
         @foreach($suppliers as $supplier)
         <tr>
            <td>{{ $supplier->name }}</td>
            <td>{{ $supplier->ruc }}</td>
            <td>
               <a class="btn btn-default" href="{{ route('suppliers.edit', ['id' => $supplier->id]) }}">Edit</a>
               <a class="btn btn-danger" id="delete_button" href="{{ route('suppliers.delete', ['id' => $supplier->id]) }}" onclick="return confirm('Are you sure you want to delete this supplier?')">Delete</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>

</div>

<div class="row">
   <div class="form-group">
      <a href="{{ route('suppliers.create', ['supplier' => $supplier->id ]) }}" class="btn btn-success">Add</a>
   </div>
</div>

@endsection