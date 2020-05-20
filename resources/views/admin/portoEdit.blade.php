@extends('admin.index')

@section('content')

<div class="container">
    <a href="{{ route('porto.show') }}"> show portofolio </a> | or add
    @foreach($porto_edit as $porto_e)
    <form action="{{ url('admin/porto/update/' .$porto_e->id) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="por_img"> image </label>
            <input type="file" class="form-control" name="por_img" >
            <small> dont forget its very important to explain how you spend your time every day</small>
        </div>
        <div class="form-group">
            <label for="title"> title portofolio </label>
            <input type="text" id="title" name="por_title" class="form-control" value="{{ $porto_e->por_title }} ">
            <small>its opitional ... </small>
        </div>
        <div class="form-group">
            <label for="desc"> descripition </label>
            <textarea id="desc" name="por_desc" class="form-control" maxlength="400" rows="6"> {{ $porto_e->por_desc }} </textarea>
            <small>descripe your work the max 400 charcter </small>
        </div>
        <div class="form-group">
            <label for="link"> link your portofolio </label>
            <input type="text" id="link" name="por_link" class="form-control" value="{{ $porto_e->por_link }}">
            <small>its opitional ... </small>
        </div>
        <input type="submit" value="update" class="btn btn-info">
    </form>
    @endforeach
</div>
@endsection
