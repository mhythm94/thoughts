@extends('cleanBlog.master')

@section('content')
    <!-- Page Header -->
  <header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Add new Article</h1>
            <span class="subheading">This is your own space..</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Please fill all fields to post a new article!</p>
        <form name="newPost" id="newPost" action="{{route('store')}}" method="POST">
        @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Name</label>
              <input type="text" class="form-control" name="name" placeholder="Name" id="name">
              @error('name')
                <p class="help-block text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" class="form-control" name="email" placeholder="Email Address" id="email" >
              @error('email')
                <p class="help-block text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Article heading</label>
              <input type="text" class="form-control" name="heading" placeholder="Article heading" id="heading">
              @error('heading')
                <p class="help-block text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Sub heading</label>
              <input type="text" class="form-control" name="sub_heading" placeholder="Article sub heading" id="sub_heading">
              @error('sub_heading')
                <p class="help-block text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Article Body</label>
              <textarea rows="12" class="form-control" name="body" placeholder="Article Body" id="messagbody" ></textarea>
              @error('body')
            <p class="help-block text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Add</button>
        </form>
      </div>
    </div>
  </div>
@endsection
