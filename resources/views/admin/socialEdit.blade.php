@extends('admin.index')

@section('content')

<div class="container">
    <a href="{{ route('social.show') }}"> show social </a> | or update
    @foreach($social_edit as $social_e)
    <form action="{{ url('admin/social/update/' .$social_e->id) }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlSelect1"> choose the the social </label>
            <select class="form-control" id="exampleFormControlSelect1" name="s_icon">

              <option value="fab fa-facebook"> facebook</option>
              <option value="fab fa-github"> githup</option>
              <option value="fab fa-instagram"> instgram</option>
              <option value="fab fa-linkedin">linkedin</option>
              <option value="fas fa-envelope">mail</option>
            </select>
          </div>

        <div class="form-group">
            <label for="link"> link your social  </label>
            <input type="text" id="link" name="s_link" class="form-control" value="{{ $social_e->s_link }}"
        </div>
        <input type="submit" value="update" class="btn btn-info">
    </form>
    @endforeach
</div>
@endsection
