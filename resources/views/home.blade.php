<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kodubotu Teknofest Grubu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
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
        <li class="nav-item"><a href="/Anasayfa" class="nav-link active" aria-current="page">Ana Sayfa</a></li>
        <li class="nav-item"><a href="/uyeler" class="nav-link">Üyelerimiz</a></li>
        <li class="nav-item"><a href="/projeler" class="nav-link">Projelerimiz</a></li>
       <!-- <li class="nav-item"><a href="/hakkimizda" class="nav-link">Hakkımızda</a></li>-->
      </ul>
    </header>



<!--#topbar-->


<!--content-->

<!--
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Hoşgeldiniz!</h1>
        <p class="col-md-8 fs-4">Aşağıdan Giriş Yapabilirsiniz.</p>
        <button class="btn btn-primary btn-lg" type="button"><a style="text-decoration: none; color:white" href="/kayitol">Kayıt Ol</a></button>
        <button class="btn btn-secondary btn-lg" type="button"><a style="text-decoration: none; color:white" href="/girisyap">Giriş Yap</a></button>
      </div>
    </div>


    <footer class="pt-3 mt-4 text-muted border-top">
                © 2022 Tüm Hakları Saklıdır.
    </footer>
  </div>

-->

<div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Hoşgeldiniz!</h1>
        <p class="lead">Merhaba, Takım olarak hepimiz bir birlik beraberlik içerisindeyiz. Her türlü zorlukla beraber başa çıkarız. Tüm üyelerimizin bu grupta bir araya gelmesinin sebebi ülkesine katkıda bulunmaktır. Bunu sizlerin yardımı ile başarıyoruz başaracağız.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" onclick=parent.location="projeler">Projelerimiz</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4" onclick=parent.location="uyeler">Üyelerimiz</button>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="bootstrap-docs.png" alt="" width="720">
      </div>
    </div>
  </div>
     
@include('tasarim.footer')

</body>
</html>