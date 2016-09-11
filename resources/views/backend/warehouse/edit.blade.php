@extends('backend.layout.base')

@section('content')

<div class="row">
   <div class="col-xs-12">
      <h2>Edit Warehouse</h2>
   </div>
</div>

@include('backend.show_errors')

<div class="row">
   <form class="form-horizontal" method="POST">
      {!! csrf_field() !!}

      <div class="form-container">

         <!-- Start name -->
         <div class="form-group">

            <div class="col-xs-3 col-xs-offset-1 col-sm-2">
               <label class="control-label">Name</label>
            </div>

            <div class="col-xs-6 col-sm-4">
                  <input type="text" class="form-control" name="name" value="{{ $warehouse->name }}">
            </div>
         </div>
         <!-- End name -->

         <!-- Start address -->
         <div class="form-group">

            <div class="col-xs-3 col-xs-offset-1 col-sm-2">
               <label class="control-label">Address</label>
            </div>

            <div class="col-xs-6 col-sm-8 col-lg-6">
               <input type="text" class="form-control" name="address" value="{{ $warehouse->address}}">
            </div>
         </div>
         <!-- End address -->

         <!-- Start update -->
         <div class="form-group">

            <div class="col-xs-6 col-xs-offset-1">
               <button class="btn btn-primary" name="update_button" type="submit" value="register">Update</button>
            </div>

         </div>
         <!-- End update -->

      </div>

   </form>
</div>

@endsection