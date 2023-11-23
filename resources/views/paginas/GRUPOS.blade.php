<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos|Multifandom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!--Navegacion-->
                           @include('partials.barranavegacion')

            <!--Barra de Opciones-->
            <nav class="navbar bg-fondo">
                <div class="container">
                <a class="navbar-brand" href="{{ route('Bts') }}">
                    <img src="img/BTS.png" alt="BTS" width="30" height="24" class="d-inline-block align-text-top"> <br>BTS</a>
                <a class="navbar-brand" href="#">
                    <img src="img/ASTRO.png" alt="Astro" width="30" height="24" class="d-inline-block align-text-top"><br>ASTRO</a>
                <a class="navbar-brand" href="#">
                    <img src="img/CRAVITY.png" alt="cravity" width="30" height="24" class="d-inline-block align-text-top"><br>CRAVITY</a>
                <a class="navbar-brand" href="En.html">
                    <img src="img/EN.png" alt="en" width="30" height="24" class="d-inline-block align-text-top"><br>ENHYPEN</a>                
                <a class="navbar-brand" href="IU.html">
                    <img src="img/IU.png" alt="iu" width="30" height="24" class="d-inline-block align-text-top"><br>IU</a> 
                <a class="navbar-brand" href="#">
                    <img src="img/THEBOYZ.png" alt="iu" width="30" height="24" class="d-inline-block align-text-top"><br>THE BOYZ</a> 
                <a class="navbar-brand" href="#">
                    <img src="img/AESPA.png" alt="iu" width="30" height="24" class="d-inline-block align-text-top"><br>AESPA</a> 
                    </div>
              </nav>
    <!--Encabezado-->
    <div class="container-fluid bg-light d-flex justify-content-center">
        <p class="text-color font-weight-bold mb-0 p-2 fs-1">Grupos</p>
    </div>    
    <br>   
    <div class="linea ">.</div>

      <!--cards-->
      <div class="container">
        <div class="row justify-content-center">
          <div class="card" style="width: 18rem;">
            <img src="img/BTS.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <a href="Bts.html" class="text-linea link-dark fs-5">BTS</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="img/NEW.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a href="#" class="text-linea link-dark fs-5">NEW JEANS</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="img/STRAY.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a href="#" class="text-linea link-dark fs-5">STRAY KIDS</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="img/ASTRO.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a href="#" class="text-linea link-dark fs-5">ASTRO</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="img/IU.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a href="IU.html" class="text-linea link-dark fs-5">IU</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="img/THEBOYZ.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a href="#" class="text-linea link-dark fs-5">THE BOYZ</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="img/AESPA.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a href="#" class="text-linea link-dark fs-5">AESPA</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="img/EN.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a href="En.html" class="text-linea link-dark fs-5">ENHYPEN</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="img/CRAVITY.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a href="#" class="text-linea link-dark fs-5">CRAVITY</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="img/TXT.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a href="Txt.html" class="text-linea link-dark fs-5">TOMORROW X TOGETHER</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="img/TWICE.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a href="Twice.html" class="text-linea link-dark fs-5">TWICE</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="img/EVER.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a href="#" class="text-linea link-dark fs-5">EVERGLOW</a>
            </div>
          </div>
        </div>
      </div>

          <!--fondo curvo-->
          <section>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#9F3A9F" fill-opacity="1" d="M0,0L48,5.3C96,11,192,21,288,74.7C384,128,480,224,576,224C672,224,768,128,864,112C960,96,1056,160,1152,176C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
          </section>
        <!-- Footer Pie de Pagina-->
          <footer class="w-100 d-flex justify-content-center align-items-center">
            <p class="fs-5 px-3 pt-3"> MKpop &copy; Todos los derechos reservados </p>
          </footer>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
</body>
</html>