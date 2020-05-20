@extends('admin.index')

@section('content')

<h2>  Portofolio </h2>
<div class="container">
    <a href="{{ route('porto.show') }}"> show portofolio </a> | or add :
    <form action="{{ route('porto.add') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="por_img"> image </label>
            <input type="file" class="form-control" name="por_img">
            <small> dont forget its very important to explain how you spend your time every day</small>
        </div>
        <div class="form-group">
            <label for="title"> title portofolio </label>
            <input type="text" id="title" name="por_title" class="form-control">
            <small>its opitional ... </small>
        </div>
        <div class="form-group">
            <label for="desc"> descripition </label>
            <textarea id="desc" name="por_desc" class="form-control" maxlength="400" rows="6"> </textarea>
            <small>descripe your work the max 400 charcter </small>
        </div>
        <div class="form-group">
            <label for="link"> link your portofolio </label>
            <input type="text" id="link" name="por_link" class="form-control">
            <small>its opitional ... </small>
        </div>
        <input type="submit" value="add" class="btn btn-info">
    </form>

</div>
@endsection
