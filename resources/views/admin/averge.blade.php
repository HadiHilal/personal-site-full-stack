@extends('admin.index')

@section('content')

<h2>  what the averge my skills  </h2>
<div class="container">
    <a href="{{ route('averge.show') }}"> show what i use </a> | or add
    <form action="{{ route('averge.add') }}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
            <label for="name"> Name the skill  </label>
            <input type="text" id="name"  name="av_name" class="form-control" >
            <small> dont forget its very important to show your skills </small>
        </div>
        <div class="form-group">
            <label for="percentage"> percentage</label>
            <input type="number" id="percentage" name="av_percentage" class="form-control">
            <small>you should insert like this 22 </small>
        </div>
        <input type="submit" value="add" class="btn btn-info">
    </form>

</div>
@endsection
