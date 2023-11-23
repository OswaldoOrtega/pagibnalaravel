 <!--Navegacion-->
 
    <nav class="navbar navbar-expand-lg bg-custom sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Logo" width="70" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-5" aria-current="page" href="{{ route('Dashboard')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-5" aria-current="page" href="{{ route('Grupos')}}">Grupos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-5" aria-current="page" href="{{ route('Artistas')}}">Actores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-5" aria-current="page" href="{{ route('Chatbot')}}">CHAT-BOT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>