@extends('cleanBlog.master')

@section('content')

<!-- Page Header -->
<header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Thoughts</h1>
            <span class="subheading">Your Personal Space</span>
          </div>
        </div>
      </div>
    </div>
  </header>

     <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        @foreach ($posts as $post)
            <div class="post-preview">
            <a href="{{url('post/'.$post->id)}}">
                <h2 class="post-title">
                {{$post->heading}}
                </h2>
                <h3 class="post-subtitle">
                    {{$post->sub_heading}}
                </h3>
            </a>
            <p class="post-meta">Posted by
                <a href="#">{{$post->name}}</a>
                on {{$post->created_at}}</p>
            </div>
            <hr>
        @endforeach
        <!-- Pager -->
        <!--
            <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        -->

      </div>
    </div>
  </div>

@endsection
