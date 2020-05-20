@extends('admin.index')
@section('content')
<h2 class="text-capitalize"> About </h2>
    <div class="container">
        @foreach($about as $about_e)
        <form  method="POST" action="{{ url('/admin/about/update/' . $about_e->id ) }}" enctype="multipart/form-data">

              {{ csrf_field() }}


              <div class="form-group">
                <img src="{{asset('admin/uploads/'. $about_e->show_img) }}" class="img-thumbnail" alt="img" height="150px" width="150px"> <br>
                <label for="img"> your img </label>
                <input type="file" class="form-control" id="img" aria-describedby="imgHelp" name="img" value="{{ $about_e->img }}">
                <small id="iconHelp" class="form-text text-muted">The image should be 150 * 150 px and type jpg or jpeg or gif or svg or png .</small>
              </div>
            <div class="form-group">
              <label for="name">Name </label>
              <input type="text" class="form-control" id="name" aria-describedby="titleHelp" name="name" value="{{ $about_e->name }}">
            </div>
            <div class="form-group">
                <label for="career">career </label>
                <input type="text" class="form-control" id="career" name="career" value="{{ $about_e->career }}">
              </div>
              <div class="form-group">
                <label for="ab_desc"> description </label>
                <textarea name="ab_desc" class="form-control" id="ab_desc" placeholder="the max width 250 capital"cols="10" rows="4" maxlength="250" name="ab_desc"> {{ $about_e->ab_desc }}</textarea>
                <small class="sm_ab_desc"> 250 capital remain  </small>
              </div>

              <div class="form-group">
                <label for="resume">your resume </label>
                <input type="text" class="form-control" id="resume" name="resume" value="{{ $about_e->resume }}">
                <small> this optional </small>
              </div>


            <button type="submit" class="btn btn-primary">Update</button>
          </form>
          @endforeach
    </div>
@endsection

