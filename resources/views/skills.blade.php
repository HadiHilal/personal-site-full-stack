
  @extends('index')

  @php
  $avg    = DB::table('averges')->get();
  $skills    = DB::table('skill_items')->get()
@endphp
  @section('content')
  <section class="skills" id="Skills">
    <div class="container">
      <h2 class="glope_head"> Skills </h2>

      <div class="key_skills">
        <h2 class="text-capitalize"> skills </h2>
        <hr>
        <div class="row">

          @foreach($skills as $skill)
          <div class="col-md-2 desc text-center">
            <img src="{{ url('admin/uploads/' . $skill->sk_show_img) }}" alt="">
            <h2>{{ $skill->name }} </h2>
          </div>
          @endforeach
        </div>
      </div>

    </div>
    <div class="clearfix"></div>

    <section class="sk_distr" id="sk_distr">
        <div class="container">
          <h2 class="glope_head">Skills distribution</h2>
          <div class="row">
            <div class="col-md-6">

              <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
            </div>
            <div class="col-md-6">
              <h2 class="text-capitalize avg_h2">averge</h2>
             <div class="bar">
                @foreach ($avg  as $s_avg)
              <label>{{ $s_avg->av_name }}</label>
              <div class="progress ">
                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="{{ $s_avg->av_percentage }}" aria-valuemin="0" aria-valuemax="100">{{ $s_avg->av_percentage }}%</div>
              </div>
             @endforeach
             </div>
            </div>
          </div>
        </div>
      </section>
</section>
@endsection

