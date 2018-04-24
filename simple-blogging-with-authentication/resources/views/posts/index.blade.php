@extends('layouts/master')

@section('content')

        <div class="col-md-8 blog-main">
          
          @foreach($posts as $post)

            @include('posts/single_article')
          
          @endforeach
  
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        @include('layouts/sidebar')

     
    @endsection('content')