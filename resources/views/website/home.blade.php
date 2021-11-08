@extends('layouts.website')
@section('content')
<div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h2>Recent Blog Post</h2>
          </div>
        </div>
        <div class="row">
        @foreach($blogs as $blog)
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="#"><img src="{{ Voyager::image( $blog->image) }}" alt="{{$blog->title}}" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3">Politics</span>

              <h2><a href="#">{{$blog->title}}</a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <!-- <figure class="author-figure mb-0 mr-3 float-left"><img src="{{ asset('website') }}/images/person_1.jpg" alt="Image" class="img-fluid"></figure> -->
                <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                <span>&nbsp;-&nbsp; {{ $blog->created_at->format('M d, Y') }}</span>
              </div>
              
              <p>{!! $blog->description !!}</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>  
          @endforeach
        </div>
        <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
            <div class="custom-pagination">
              <span>1</span>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <span>...</span>
              <a href="#">15</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection