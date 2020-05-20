@extends('admin.index')

@section('content')

<h2>  skill titles </h2>
<div class="container">
    <a href="{{ route('skill_title.show') }}"> show skill title </a> | or add :
    <form action="{{ route('skill_title.add') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title"> title your skill  </label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <input type="submit" value="add" class="btn btn-info">
    </form>

</div>
@endsection
