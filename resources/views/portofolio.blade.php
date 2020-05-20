
  @extends('index')
  @section('content')
  @php
      $por = DB::table('portos')->get()
  @endphp
  <section class="portfolio" id="Portofolio" >
    <div class="container">
      <h2 class="glope_head"> portfolio </h2>
      <div class="row">
        @foreach( $por as $s_por)
        <div class="col-md-6 show text-center">
          <img src="{{ url('admin/uploads/' . $s_por->por_img_show) }}" alt="site img">
          <a class="btn " href="{{url('https://'.$s_por->por_link)}}" target="_blank"> See it </a>
        </div>
        <div class="col-md-6 desc">
          <h3 class="text-capitalize"> {{ $s_por->por_title }} </h3>
          <p> {{ $s_por->por_desc }}
          </p>

        </div>
        @endforeach
      </div>
    </div>
    <div class="clearfix"></div>
  </section>
@endsection

