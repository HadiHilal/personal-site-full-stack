@extends('admin.index')

@section('content')

<h2>  social links </h2>
<div class="container">
    <a href="{{ route('social.show') }}"> show social </a> | or add :
    <form action="{{ route('social.add') }}" method="POST">
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
            <input type="text" id="link" name="s_link" class="form-control">
        </div>
        <input type="submit" value="add" class="btn btn-info">
    </form>

</div>
@endsection
