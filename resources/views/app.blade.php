<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>@lang('app.head-title')</title>
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="css/app.css">
</head>

<body class="min-vh-100 d-flex flex-column">
  <header class="center shadow">
    <div>
      <a href="{{ url('/') }}" class="text-decoration-none text-white">
        <i id="title" class="bi bi-boombox center"><p class="my-0 mx-1">@lang('app.header-title')</p></i>
      </a>

      <div class="position-fixed top-0 end-0 mx-2">
        <button type="button" class="btn btn-outline-info rounded-bottom border-top-0" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-globe"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ url('locale/en') }}">En</a></li>
          <li><a class="dropdown-item" href="{{ url('locale/es') }}">Es</a></li>
        </ul>
      </div>
    </div>
  </header>

  <main class="container mb-5">
    @yield('content')
  </main>

  <footer class="py-3 mt-auto border-top">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3 mx-5">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>

    <div class="d-flex flex-wrap justify-content-between align-items-center py-1">
      <div class="col-md-4 d-flex align-items-center mx-3">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1 fs-5"><i class="bi bi-arrow-through-heart"></i>
        </a>
        <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
      </div>

      <ul class="col-md-4 d-flex justify-content-end list-unstyled mb-0">
        <li class="mx-2">
          <a class="text-muted fs-5" href="#">
            <i class="bi bi-whatsapp"></i>
          </a>
        </li>

        <li class="mx-2">
          <a class="text-muted fs-5" href="#">
            <i class="bi bi-facebook"></i>
          </a>
        </li>

        <li class="mx-2">
          <a class="text-muted fs-5" href="#">
            <i class="bi bi-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </footer>

  <script src="js/app.js"></script>
</body>
</html>