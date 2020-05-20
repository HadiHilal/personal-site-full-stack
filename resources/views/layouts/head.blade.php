<!DOCTYPE html>
<html lang="en">
  <head>
      @php
          $about = DB::table('abouts')->get()
      @endphp
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <!-- Site Icon -->
     <link rel="icon" type="image/png" href="{{ asset('design/img/man.png') }}" />
    <!-- Site Description-->
    @foreach ($about as $s_about)
    <meta name="description" content="{{ $s_about->ab_desc }}">
    <!-- Site Tags -->
    <meta name=”robots” content="index, follow">
    <!-- Title -->
    <title>{{ $s_about->name  }} | {{ $s_about->career }}</title>
    @endforeach

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('design/css/bootstrap.css') }}" />
    <!-- Font css -->
    <link rel="stylesheet" href="{{ asset('design/css/all.css') }}" />
    <!-- Normalize css -->
    <link rel="stylesheet" href="{{ asset('design/css/normalize.css') }}" />
    <!-- Style file css -->
    <link rel="stylesheet" href="{{ asset('design/css/main.css') }}" />
    <!-- Style file css -->
    <link rel="stylesheet" href="{{ asset('design/css/loader.css') }}" />
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
  </head>
<body>

  <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>

  </div>
