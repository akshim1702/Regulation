@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('cities.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Add City</h2>
  </section>

   <div class="row">
      
      <div class="col-md-12">
      
         <!-- @if ($message = Session::get('fail'))
         <div class="alert alert-danger">
            <p>{{ $message }}</p>
         </div>
         @endif -->
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Basic Information</h3>
            </div>
            <div class="box-body">
               <form action="{{ route('cities.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="state_id">State Name:</label>
                              <select class="form-control" name="state_id" id="state_id" style="height: 35px;">
                                 <option value="">Select State</option>
                                 @foreach($states as $state)
                                 <option value="{{$state->id}}">{{$state->name}}</option>
                                 @endforeach
                              </select>
                              <span class="text-danger">{{ $errors->first('state_id') }}</span>
                     </div>
                  </div>
                  
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="name">City Name:</label>
                              <input type="text" class="form-control" id="name" placeholder="Enter State Name" name="name" value="{{old('name')}}">
                              <span class="text-danger">{{ $errors->first('name') }}</span>
                     </div>
                  </div>

                  <div class="box-footer">
                     <button type="submit" name="submit" class="btn btn-primary pull-left">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@stop