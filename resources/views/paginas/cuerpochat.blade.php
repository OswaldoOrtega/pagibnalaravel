  @extends('layouts.app_principal')
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
<div class="chatbot">
    <div class="respuesta-container" id="respuesta-container">
        <!-- Mostrar historial -->
       @if(!empty($historial))
    <h3>Historial de Conversación:</h3>
    @foreach ($historial as $item)
        <p><strong>Yo:</strong> {{ $item['pregunta'] }}</p>
        <p><strong>Bot:</strong> {{ $item['respuesta'] }}</p>
    @endforeach
@endif

        <!-- Mostrar pregunta actual y respuesta del bot -->
        @if(isset($preguntaUsuario) && isset($respuestaBot))
            <h3>Pregunta Actual:</h3>
            <p><strong>Yo:</strong> {{ $preguntaUsuario }}</p>
            <p><strong>Bot:</strong> {{ $respuestaBot }}</p>
        @endif
    </div>
    <form class="chat-form" id="chat-form" method="POST" action="{{ route('respuestas.chat') }}">
        @csrf
        <div class="d-flex">
            <input type="text" class="form-control d-inline pregunta" name="pregunta" required autocomplete="pregunta" autofocus placeholder="Escribe tu mensaje aquí...">
            <button type="submit" class="btn btn-primary ms-2">Enviar</button>
        </div>
    </form>
</div>

        {{-- <div class="chatbot">
    <div class="respuesta-container" id="respuesta-container">
        <!-- Aquí se mostrará la conversación -->
        @if(isset($preguntaUsuario) && isset($respuestaBot))
            <p><strong>Yo:</strong> {{ $preguntaUsuario }}</p>
            <p><strong>Bot:</strong> {{ $respuestaBot }}</p>
        @endif
    </div>
    <form class="chat-form" id="chat-form" method="POST" action="{{ route('respuestas.chat') }}">
        @csrf
        <div class="d-flex">
            <input type="text" class="form-control d-inline pregunta" name="pregunta" required autocomplete="pregunta" autofocus placeholder="Escribe tu mensaje aquí...">
            <button type="submit" class="btn btn-primary ms-2">Enviar</button>
        </div>
    </form>
</div> --}}

   


{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('.chat-form').on('submit', function(event) {
        event.preventDefault(); // Evitar la acción por defecto del formulario

        var form = $(this);
        var pregunta = form.find('.pregunta').val();
        var respuestaContainer = form.prev('.respuesta-container');

        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: { pregunta: pregunta },
            success: function(response) {
                // Limpia el contenedor actual
                respuestaContainer.empty();

                // Muestra la pregunta y la respuesta en el contenedor
                var conversacion = '<p><strong>Yo:</strong> ' + pregunta + '</p>';
                conversacion += '<p><strong>Bot:</strong> ' + response.respuesta + '</p>';
                respuestaContainer.html(conversacion);
            },
            error: function(error) {
                console.error(error);
            }
        });

        // Limpiar el input después de enviar el mensaje
        form.find('.pregunta').val('');
    });


</script> --}}

       
</body>
</html>


  