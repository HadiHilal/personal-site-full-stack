@extends('admin.index')

@section('content')

<h2>  All skill details </h2>
<div class="container">
    <a href="{{ route('skill_desc.index') }}" class="btn btn-warning" > Add another </a>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">image</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($skill_desc_show  as $s_show)
          <tr>
            <th scope="row">{{ $s_show->id }}</th>
            <td> {{ $s_show->id}}</td>
            <td> <img src="{{ asset('admin/uploads/' . $s_show->sk_show_img ) }}" alt="" width="50px" height="50px"> </td>
            <td>{{ $s_show->name }}</td>
            <td>
                <a href="{{ url('admin/skill_desc/edit/' .$s_show->id) }}" class="btn btn-info" > Edit </a>
                <a onclick="return confirm('Are you sure?')" href="{{ url('admin/skill_desc/delete/' .$s_show->id) }}" class="btn btn-danger" > Delete </a>

            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection
