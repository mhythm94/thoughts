@extends('cleanBlog.master')
@section('content')
    @foreach ($data as $post)
<!-- Page Header -->
  <header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{$post['heading']}}</h1>
            <h2 class="subheading">{{$post['sub_heading']}}</h2>
            <span class="meta">Posted by
              <a href="#">{{$post['name']}}</a>
              on {{$post['created_at']}}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>{{$post['body']}}</p>
        </div>
      </div>
    </div>
  </article>
  @endforeach
@endsection
