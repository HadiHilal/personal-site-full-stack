@extends('admin.index')

@section('content')

<h2>  All social links  </h2>
<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Icon</th>
            <th scope="col">Link</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($social_show  as $s_show)
          <tr>
            <th scope="row">{{ $s_show->id }}</th>
            <td> <i class="{{ $s_show->s_icon }}"></i></td>
            <td>{{ $s_show->s_link }}</td>
            <td>
                <a href="{{ url('admin/social/edit/' .$s_show->id) }}" class="btn btn-info" > Edit </a>
                <a onclick="return confirm('Are you sure?')" href="{{ url('admin/social/delete/' .$s_show->id) }}" class="btn btn-danger" > Delete </a>

            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection
