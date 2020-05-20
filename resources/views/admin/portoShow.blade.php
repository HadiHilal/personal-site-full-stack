@extends('admin.index')

@section('content')

<h2>  All Portofolio Item   </h2>
<div class="container">

        @foreach($porto_show  as $p_show)
        <div class="card mt-5">
            <img src="{{ asset('admin/uploads/'.$p_show->por_img_show) }}" height="300px" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">{{ $p_show->por_desc }}.</p>
              <a href="//{{$p_show->por_link }}" class="btn btn-warning">Go to link </a>
              <a href="{{ url('admin/porto/edit/' .$p_show->id )  }}" class="btn btn-info">  Edit </a>
              <a  onclick="return confirm('Are you sure?')" href="{{ url('admin/porto/delete/' .$p_show->id ) }}" class="btn btn-danger">Delete </a>
              <a href="{{ url('admin/porto' ) }}" class="btn btn-primary">Add another </a>

            </div>
          </div>
        @endforeach

</div>
@endsection
