@extends('admin.index')

@section('content')


@if($count == 0)

<div class="container ">

    <form  method="POST" action="{{ url('/admin/about/add') }}" enctype="multipart/form-data">

          {{ csrf_field() }}


          <div class="form-group">

            <label for="img"> your img </label>
            <input type="file" class="form-control" id="img" aria-describedby="imgHelp" name="img" >
            <small id="iconHelp" class="form-text text-muted">The image should be 150 * 150 px and type jpg or jpeg or gif or svg or png .</small>
          </div>
        <div class="form-group">
          <label for="name">Name </label>
          <input type="text" class="form-control" id="name" aria-describedby="titleHelp" name="name">
        </div>
        <div class="form-group">
            <label for="career">career </label>
            <input type="text" class="form-control" id="career" name="career">
          </div>
          <div class="form-group">
            <label for="ab_desc"> description </label>
            <textarea name="ab_desc" class="form-control" id="ab_desc" placeholder="the max width 250 capital"cols="10" rows="4" maxlength="250" name="ab_desc"></textarea>
            <small class="sm_ab_desc"> 250 capital remain  </small>
          </div>

          <div class="form-group">
            <label for="resume">your resume </label>
            <input type="text" class="form-control" id="resume" name="resume">
            <small> this optional </small>
          </div>


        <button type="submit" class="btn btn-primary">Add</button>
      </form>

@else
    @foreach($about_all as $idx_about)
    <a href="{{ url('/admin/about/edit/' . $idx_about->id )}}"> clic here to edit about section</a>
    @endforeach

@endif

@endsection
