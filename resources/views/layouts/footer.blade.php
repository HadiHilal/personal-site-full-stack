
 @php
 $soc    = DB::table('socials')->get()
@endphp
<footer>
    <p class="text-capitalize">  all copy &copy; are reservered</p>
    <div class="ico">
         @foreach ($soc as $s_item)


    <a href="{{url('https://'.$s_item->s_link)}}" target="_target">   <i class="{{ $s_item->s_icon }}"></i> </a>

    @endforeach
  </div>
  </footer>
  <div class="arrow-scroll" id="arr">
    <i class="fas fa-chevron-up"></i>
  </div>

