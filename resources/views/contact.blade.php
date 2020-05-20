
  @extends('index')

  @section('content')
  <section class="contact" id="contact">
    <div class="container">
      <h2 class="glope_head">Contact</h2>
   <div class="row">
     <div class="col-md-12">
      <form method="POST" action="{{ route('add.contact') }}">
        @include('layouts.erorrs')
        @include('layouts.sucess')
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name </label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="name" aria-describedby="nameHelp" required>
          </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Your email here" aria-describedby="emailHelp" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label>message</label>
         <textarea  id="" cols="30" minlength="100" rows="10" class="form-control" name="message" placeholder="Your message here" required></textarea>
        </div>

        <button type="submit" class="btn">Submit</button>
      </form>
     </div>
   </div>
    </div>
  </section>
@endsection

