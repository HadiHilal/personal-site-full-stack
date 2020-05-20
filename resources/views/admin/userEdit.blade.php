@extends('admin.index')

@section('content')

<div class="container">
    @foreach($user_edit as $user_e)
    <form action="{{ url('admin/user/update/' .$user_e->id) }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name"> your name   </label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $user_e->name }}"
        </div>

        <div class="form-group">
            <label for="email"> your email </label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $user_e->email }}"
        </div>

        <div class="form-group">
            <label for="password"> new password  </label>
            <input type="password" id="password" name="password" class="form-control">
            <small> if you want to add password it should be more than 6 charcter</small>
        </div>
        <input type="submit" value="update" class="btn btn-info">
    </form>
    @endforeach
</div>
@endsection
