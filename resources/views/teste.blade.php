<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste com Bootstrap</title> 

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="{{ asset('css/page1.css') }}" rel="stylesheet">  <!-- link do CSS personalizado -->
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <!-- divisoria para inserir -->
    <!-- <h1 class="text-center mt-5">Teste com Bootstrap</h1> -->
 <div class="container">
        <header
          class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom"
        >
          <a
            href="/"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"
          >
            <svg class="bi me-2" width="40" height="32" aria-hidden="true">
              <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Simple header</span>
          </a>
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a href="#" class="nav-link active" aria-current="page">casa sla</a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link">funcão</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">teste</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
          </ul>
        </header>
      </div>
</body>
</html>