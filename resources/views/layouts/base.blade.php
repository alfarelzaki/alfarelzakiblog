<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Dashboard</title>
  <link rel="icon" href="{{asset('images/logo.png')}}">

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <a class="navbar-brand mr-1" href="{{url('layouts.base')}}">Admin Dashboard</a>

      <button class="btn btn-link btn-sm text-black order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">

              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item">
                          <a role="button" class="btn btn-light" href="{{ route('post.create') }}">Dashboard</a>
                      </li>

                      <li class="nav-item">
                          <a role="button" class="btn btn-light" href="{{ route('blog') }}">Blog</a>
                      </li>

                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
          </div>
      </div>
  </nav>
  @include('layouts.partials._alerts')

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav bg-light">
      <li class="nav-item">
        <a role="button" class="btn btn-light nav-link @yield('write post')" href="{{ route('post.create')}}">
          <i class="fas fa-fw fa-pencil-alt text-dark"></i>
          <span class="text-dark">Write Post</span></a>
      </li>

      <li class="nav-item">
        <a role="button" class="btn btn-light nav-link @yield('post')" href="{{ route('post.index') }}">
          <i class="fas fa-fw fa-table text-dark"></i>
          <span class="text-dark">Posts</span></a>
      </li>

      <li class="nav-item">
        <a role="button" class="btn btn-light nav-link @yield('category')" href="{{route ('category.index')}}">
          <i class="fas fa-fw fa-table text-dark"></i>
          <span class="text-dark">Category</span></a>
      </li>
    </ul>
    @yield('content')
    <!-- /.content-wrapper -->

    <!-- Sticky Footer -->
    <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
        <span>Copyright © Your Website 2019</span>
        </div>
    </div>
    </footer>
  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{ asset('js/demo/datatables-demo.js')}}"></script>
  <script src="{{ asset('js/demo/chart-area-demo.js')}}"></script>

</body>

</html>
