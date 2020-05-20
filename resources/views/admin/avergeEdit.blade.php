@extends('admin.index')

@section('content')

<div class="container">
    @foreach ($averge_edit as $averge_e)
    <form action="{{ url('admin/averge/update/' . $averge_e->id ) }}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
            <label for="name"> Name the tool you use evey day </label>
            <input type="text" id="name"  name="av_name" class="form-control" value="{{ $averge_e->av_name }}" >
            <small> dont forget its very important to explain how you spend your time every day</small>
        </div>
        <div class="form-group">
            <label for="percentage"> percentage</label>
            <input type="number" id="percentage" name="av_percentage" class="form-control" value="{{ $averge_e->av_percentage }}">
            <small>you should insert like this 22 </small>
        </div>
        <input type="submit" value="update" class="btn btn-info">
    </form>
    @endforeach
</div>
@endsection
