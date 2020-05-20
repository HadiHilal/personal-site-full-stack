@extends('admin.index')

@section('content')

<div class="container">
    <a href="{{ route('skill_title.show') }}"> show skill </a> | or update
    @foreach($user_edit as $skill_e)
    <form action="{{ url('admin/skill_title/update/' .$skill_e->id) }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title"> title your skill  </label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $skill_e->title }}"
        </div>
        <input type="submit" value="update" class="btn btn-info">
    </form>
    @endforeach
</div>
@endsection
