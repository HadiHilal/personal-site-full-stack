@extends('admin.index')

@section('content')

<h2>  All Messages  </h2>
<div class="container">
     <a href=""> you have {{ $all_message->count() }} message </a>
        @foreach($all_message  as $m_show)
          <div class="card mt-5">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6 pull-left">
                        <i class="fas fa-user"></i> {{ $m_show->name }}
                    </div>
                    <div class="col-md-6 pull-right">
                        <i class="far fa-clock"></i> {{ $m_show->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $m_show->email }}</h5>
              <p class="card-text">{{ $m_show->message }}.</p>
              <a  onclick="return confirm('Are you sure?')" href="{{ url('admin/message/delete/' .$m_show->id ) }}" class="btn btn-danger">Delete </a>

            </div>
          </div>
        @endforeach

</div>
@endsection
