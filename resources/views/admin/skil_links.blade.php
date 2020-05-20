@extends('admin.index')

@section('content')

<div class="container">
    <a href="{{ route('skill_title.index') }}"> show skill titles </a> | or <br>
    <a href="{{ route('skill_desc.index') }}"> show skill images </a>
</div>
@endsection
