<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Perpustakaan</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/img/dppkb/nadias.jpg')}}">
  @include('layout.partials.head-main')
</head>

<body>
  @include('sweetalert::alert')
  @if(!Route::is(['error-404','error-500','session-expired']))
  <div class="main-wrapper">
    @endif
    @if(Route::is(['session-expired']))
    <div class="main-wrapper error-page">
      @endif
      @include('layout.partials.header-main')
      @yield('content')
      @include('layout.partials.footer-main')
    </div>
    @include('layout.partials.footer-main-scripts')
</body>

</html>