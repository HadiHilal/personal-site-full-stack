  <!-- Header -->
  <header>
    <div class="overlay">
     <div class="container">
        @include('layouts.navbar')
        @php( $about = DB::table('abouts')->get())
         <!-- about -->
         <div class="about text-center">
             @foreach($about as $s_about)
             <img src="{{ url('admin/uploads/' . $s_about->show_img )}}" class="img-about">
             <h1 class="text-uppercase"> {{ $s_about->name }}</h2>
           <h2 class="text-uppercase"> {{ $s_about->career }}</h1>
           <p> {{ $s_about->ab_desc }}</p>
           <a href="{{ url('/portofolio') }}" class="btn" id="start"> Get Started</a>
           <div class="chev">
             <i class="fas fa-chevron-down"></i>
           </div>
           @endforeach
         </div>
       </div>
    </div>
   </header>
   <!-- Header -->
