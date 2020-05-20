@extends('admin.index')

@section('content')
@foreach($all_user as $idx_user)

<a href="{{ url('/admin/user/edit/' . $idx_user->id )}}"> clic here to edit account</a>

@endforeach
@endsection
