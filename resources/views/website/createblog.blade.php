@extends('layouts.website')
@section('content')
<div class="card-body p-0">
  <div class="row">
    <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
      <div class="card-body">
         @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
         @endif
      <form class="form-horizontal" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data"> 
          @csrf
        <div class="form-group">
           <label for="usr">Blog Title</label>
              <input type="text" class="form-control" id="title" name="title">
              @error('title') <p class="text-danger">{{$message}}</p> @enderror
        </div>
        <div class="form-group">
          <label for="comment">Blog Description</label>
          <textarea class="form-control" rows="5" id="description" name="description"></textarea>
          @error('description') <p class="text-danger">{{$message}}</p> @enderror
        </div>
        <div class="form-group">
           <label for="usr">Blog Image</label>
              <input type="file" class="form-control" id="image" name="image">
              @error('image') <p class="text-danger">{{$message}}</p> @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
        </div>
     </form>  
     </div>
    </div>
  </div>
   
@endsection