@extends('admin.index')

@section('content')

<h2>  skill details </h2>
<div class="container">
    <a href="{{ route('skill_desc.show') }}"> show skill details </a> | or add :
    <form action="{{ route('skill_desc.add') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlSelect1"> choose the the skill_desc </label>
            <select class="form-control" id="exampleFormControlSelect1" name="sk_title_id">
                @foreach($all_title as $a_title)
              <option value="{{ $a_title->id }}"> {{ $a_title->title }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="img"> choose image  </label>
            <input type="file" id="img" name="sk_img" class="form-control">
        </div>

        <div class="form-group">
            <label for="name"> name your skill  </label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <input type="submit" value="add" class="btn btn-info">
    </form>

</div>
@endsection
