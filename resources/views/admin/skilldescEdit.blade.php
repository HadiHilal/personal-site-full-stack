@extends('admin.index')

@section('content')

<h2>  skill details </h2>
<div class="container">

    <a href="{{ route('skill_desc.show') }}"> show skill details </a> | or add :
    @foreach($skill_desc_edit as $sk_edit)
    <form action="{{ url('admin/skill_desc/update/' . $sk_edit->id) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlSelect1"> choose the the skill_desc </label>
            <select class="form-control" id="exampleFormControlSelect1" name="sk_title_id">

              <option value="{{ $sk_edit->sk_title_id }}"> {{ $sk_edit->sk_title_id}}</option>

            </select>
          </div>

          <div class="form-group">
            <label for="img"> choose image  </label>
            <input type="file" id="img" name="sk_img" class="form-control" >
        </div>

        <div class="form-group">
            <label for="name"> name your skill  </label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $sk_edit->name }}">
        </div>
        <input type="submit" value="update" class="btn btn-info">
    </form>
    @endforeach

</div>
@endsection
