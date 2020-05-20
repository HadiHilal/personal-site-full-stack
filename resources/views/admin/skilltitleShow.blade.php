@extends('admin.index')

@section('content')

<h2>  All skill titles  </h2>
<div class="container">
    <a href="{{ route('skill_title.index') }}" class="btn btn-warning" > add another title</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($skill_t_show  as $t_show)
          <tr>
            <th scope="row">{{ $t_show->id }}</th>
            <td> {{ $t_show->title }}</td>
            <td>
                <a href="{{ url('admin/skill_title/edit/' .$t_show->id) }}" class="btn btn-info" > Edit </a>
                <a onclick="return confirm('Are you sure?')" href="{{ url('admin/skill_title/delete/' .$t_show->id) }}" class="btn btn-danger" > Delete </a>

            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection
