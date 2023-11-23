<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multifandom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
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
                        <a class="nav-link active text-white fs-5" aria-current="page" href="{{ route('Chatbotcuerpo')}}">Chat-bot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-5" aria-current="page" href="{{ route('preguntas.index')}}">Registrar preguntas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-5" aria-current="page" href="{{ route('respuestas.index')}}">Registrar Respuestas</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
   


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
</body>
</html>

