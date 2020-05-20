@extends('admin.index')

@section('content')

<h2>  All  </h2>
<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Percentage</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($averge_show  as $av_show)
          <tr>
            <th scope="row">{{ $av_show->id }}</th>
            <td>{{ $av_show->av_name }}</td>
            <td>{{ $av_show->av_percentage }}</td>
            <td>
                <a href="{{ url('admin/averge/edit/' .$av_show->id) }}" class="btn btn-info" > Edit </a>
                <a onclick="return confirm('Are you sure?')" href="{{ url('admin/averge/delete/' .$av_show->id) }}" class="btn btn-danger" > Delete </a>

            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection
