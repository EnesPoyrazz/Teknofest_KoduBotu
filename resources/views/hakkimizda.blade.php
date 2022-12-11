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
        <li class="nav-item"><a href="/projeler" class="nav-link">Projelerimiz</a></li>
        <li class="nav-item"><a href="/hakkimizda" class="nav-link active">Hakkımızda</a></li>
      </ul>
    </header>




    <!--test-->

  
<style>
.Stil{
align:center

}

</style>

    <form>
  <div class="mb-3 stil container">
    <label for="exampleInputEmail1" class="form-label">E-Posta Adresi</label><br>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">E-Posta Adresiniz Kimse İle Paylaşılmayacaktır.</div><br>
  </div>
  <div class="mb-3 stil container">
    <label for="exampleInputPassword1" class="form-label">Mesaj</label><br>
    <input type="Text" class="form-control" id="Text">
  </div>
  <div class="mb-3 form-check stil container">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label stil" for="exampleCheck1">Beni Hatırla</label>
  </div>
  <div div class="mb-3 form-check stil container">
  <input type="submit" class="btn btn-primary container"></input><br>
</div>
</form>

          
            
@include('tasarim.footer')

  </html>