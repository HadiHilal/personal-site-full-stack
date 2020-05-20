@extends('admin.index')

@section('content')

<div class="container">
    @foreach ($iuse_edit as $iuse_e)
    <form action="{{ url('admin/iuse/update/' . $iuse_e->id ) }}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
            <label for="name"> Name the tool you use evey day </label>
            <input type="text" id="name"  name="i_name" class="form-control" value="{{ $iuse_e->i_name }}" >
            <small> dont forget its very important to explain how you spend your time every day</small>
        </div>
        <div class="form-group">
            <label for="percentage"> percentage</label>
            <input type="number" id="percentage" name="i_percentage" class="form-control" value="{{ $iuse_e->i_percentage }}">
            <small>you should insert like this 22 </small>
        </div>
        <input type="submit" value="update" class="btn btn-info">
    </form>
    @endforeach
</div>
@endsection
