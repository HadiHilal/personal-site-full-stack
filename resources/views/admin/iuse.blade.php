@extends('admin.index')

@section('content')

<h2>  what the tools i use every day </h2>
<div class="container">
    <a href="{{ route('iuse.show') }}"> show what i use </a> | or add
    <form action="{{ route('iuse.add') }}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
            <label for="name"> Name the tool you use evey day </label>
            <input type="text" id="name"  name="i_name" class="form-control" >
            <small> dont forget its very important to explain how you spend your time every day</small>
        </div>
        <div class="form-group">
            <label for="percentage"> percentage</label>
            <input type="number" id="percentage" name="i_percentage" class="form-control">
            <small>you should insert like this 22 </small>
        </div>
        <input type="submit" value="add" class="btn btn-info">
    </form>

</div>
@endsection
