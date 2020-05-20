@include('admin.layouts.head')
@include('admin.layouts.sidebar')

<div class="col-md-9" id="wis">
    @include('admin.layouts.navbar')
    <div class="content">
        @include('admin.layouts.erorrs')
        @include('admin.layouts.sucess')
        @yield('content')

    </div>
</div>

@include('admin.layouts.footer')
