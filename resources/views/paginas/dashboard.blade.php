@extends('layouts.app')

@section('container')
<!--Barra de Opciones-->
                <nav class="navbar bg-fondo">
                    <div class="container">
                    <a class="navbar-brand" href="{{ route('Bts') }}">
                        <img src="img/BTS.png" alt="BTS" width="30" height="24" class=" align-text-top"> <br>BTS</a>
                    <a class="navbar-brand" href="#">
                        <img src="img/ASTRO.png" alt="Astro" width="30" height="24" class=" align-text-top"><br>ASTRO</a>
                    <a class="navbar-brand" href="#">
                        <img src="img/CRAVITY.png" alt="cravity" width="30" height="24" class=" align-text-top"><br>CRAVITY</a>
                    <a class="navbar-brand" href="En.html">
                        <img src="img/EN.png" alt="en" width="30" height="24" class="align-text-top"><br>ENHYPEN</a>                
                    <a class="navbar-brand" href="IU.html">
                        <img src="img/IU.png" alt="iu" width="30" height="24" class="align-text-top"><br>IU</a> 
                    <a class="navbar-brand" href="#">
                        <img src="img/THEBOYZ.png" alt="iu" width="30" height="24" class=" align-text-top"><br>THE BOYZ</a> 
                    <a class="navbar-brand" href="#">
                        <img src="img/AESPA.png" alt="iu" width="30" height="24" class="align-text-top"><br>AESPA</a> 
                        </div>
                  </nav>
                      <!--Encabezado-->
            <div class=" bg-light d-flex justify-content-center">
                <p class="text-color font-weight-bold mb-0 p-2 fs-1">MULTIFANDOM</p>
            </div>    
            <br>   
            <div class="linea ">.</div>
      <!--carousel-->
      <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/collage.1.jpg" class="d-block mx-auto max-width-600" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/coll.jpg" class="d-block mx-auto max-width-600" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/colle.jpg" class="d-block mx-auto max-width-600" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
                
    <!--encabezado boygroups-->
    <br>
    <div class="container-fluid bg-light d-flex justify-content-center">
        <p class="text-color font-weight-bold mb-0 p-2 fs-1">BOYGROUPS</p>
    </div>
    <br>
    <div class="linea ">.</div>
      <!--cards boygroups-->
      <div class="container">
        <div class="row justify-content-center">

          <div class="card" style="width: 18rem;">
            <img src="img/TXT.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <a href="{{ route('Txt') }}" class="btn bg-custom">lee mas</a>
                <a href="https://www.youtube.com/channel/UCtiObj3CsEAdNU6ZPWDsddQ" class="btn bg-fondo">ver videos</a>
            </div>

          </div>
          <div class="card" style="width: 18rem;">
            <img src="img/STRAY.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
               <a href="#" class="btn bg-custom">lee mas</a>
               <a href="#" class="btn bg-fondo">ver videos</a>
            </div>
          </div>
          <div class="card " style="width: 18rem;">
            <img src="img/BTS.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <a href="Bts.html" class="btn bg-custom">lee mas</a>
                <a href="https://www.youtube.com/channel/UCLkAepWjdylmXSltofFvsYQ" class="btn bg-fondo">ver videos</a>
            </div>
          </div>
        </div>
      </div>
          <!--encabezado girlgroups-->
          <div class="container-fluid bg-light d-flex justify-content-center">
            <p class="text-color font-weight-bold mb-0 p-2 fs-1">GIRLGROUPS</p>
        </div>
        <div class="linea ">.</div>
        <br>
          <!--cards girl groups-->
          <div class="container">
            <div class="row justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="img/TWICE.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <a href="{{ route('Twice') }}" class="btn bg-custom">lee mas</a>
                    <a href="https://www.youtube.com/channel/UCzgxx_DM2Dcb9Y1spb9mUJA" class="btn bg-fondo">ver videos</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="img/NEW.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <a href="#" class="btn bg-custom">lee mas</a>
                    <a href="#" class="btn bg-fondo">ver videos</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="img/IU.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <a href="IU.html" class="btn bg-custom">lee mas</a>
                    <a href="https://www.youtube.com/channel/UC3SyT4_WLHzN7JmHQwKQZww" class="btn bg-fondo">ver videos</a>
                </div>
              </div>
            </div>
          </div>

          <!--encabezado artistas-->
          <div class="container-fluid bg-light d-flex justify-content-center">
            <p class="text-color font-weight-bold mb-0 p-2 fs-1">ARTISTAS EN TENDENCIA</p>
        </div>
        <div class="linea ">.</div>
        <br>
          <!--cards artistas-->
          <div class="container">
            <div class="row justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="img/NUNU.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <a href="{{ route('Nunu') }}" class="btn bg-custom">lee mas</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="img/JUNGSUK.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <a href="#" class="btn bg-custom">lee mas</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="img/SEOJOON.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <a href="#" class="btn bg-custom">lee mas</a>
                </div>
              </div>
            </div>
          </div>
@endsection