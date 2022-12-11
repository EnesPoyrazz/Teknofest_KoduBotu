<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kodubotu Teknofest Grubu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
<!--topbar-->

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Kodubotu Teknofest Grubu<span>
      </a>
      
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/Anasayfa" class="nav-link" aria-current="page">Ana Sayfa</a></li>
        <li class="nav-item"><a href="/uyeler" class="nav-link">Üyelerimiz</a></li>
        <li class="nav-item"><a href="/projeler" class="nav-link active">Projelerimiz</a></li>
      <!--  <li class="nav-item"><a href="/hakkimizda" class="nav-link">Hakkımızda</a></li>-->
      </ul>
    </header>


      <main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Projeler</h1>
      <p class="lead my-3">Aşağıdan Projelerimizi Okuyabilirsiniz.</p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h2 class="mb-0">Proje1</h2>
          <div class="mb-1 text-muted"></div>
          <div class="mb-1 text-muted"></div>
          <div class="mb-1 text-muted"></div>
          <p class="card-text mb-auto">Proje1 Ayrıntıları.</p>
          <a href="projeler/proje1" class="stretched-link text-decoration-none">Proje Ayrıntıları</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img width="200" height="250" src="https://i.pinimg.com/originals/bd/ac/32/bdac327b05ddaa05216dfa08c9e734c3.jpg"></img>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h2 class="mb-0">Proje2</h2>
          <div class="mb-1 text-muted"></div>
          <div class="mb-1 text-muted"></div>
          <div class="mb-1 text-muted"></div>
          <p class="mb-auto">Proje2 Ayrıntıları</p>
          <a href="#" class="stretched-link text-decoration-none">Proje Ayrıntıları</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img width="200" height="250" src="https://i.pinimg.com/originals/bd/ac/32/bdac327b05ddaa05216dfa08c9e734c3.jpg"></img>
        </div>
      </div>
    </div>
  </div>




</main>




@include('tasarim.footer')