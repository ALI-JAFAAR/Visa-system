@include('layouts.include.head')


<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="/">Uruk Visa System</a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
  </nav>

  <div id="wrapper">

  @include('layouts.include.sidebar')

    <div id="content-wrapper">

      <div class="container-fluid">
		    @yield('Content')
      </div>
      <!-- /.container-fluid -->
@include('layouts.include.footer')
