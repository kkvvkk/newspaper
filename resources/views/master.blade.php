<!DOCTYPE html>
<head>
  <title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href=" {{ URL::asset('css/bootstrap.css') }} ">
  <script src="{{asset('js/jquery.min.js')}}"></script>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="{{route('main')}}" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <span class="fs-4">Тредиум</span>
      </a>
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{route('main')}}" class="nav-link" aria-current="page" name="main">На главную</a></li>
        <li class="nav-item"><a href="{{route('articles')}}" class="nav-link" name="articles">Каталог статей</a></li>
      </ul>
    </header>
    <div class="container">
		  @yield('content')
	  </div>
</div>
<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Тредиум 2021</span>
  </div>
</footer>
</body>