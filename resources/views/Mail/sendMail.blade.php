<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envio Mail</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $details['message'] }}</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Tus datos ingresados
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><b>Nombre: </b> {{ $details['name'] }}</li>
          <li class="list-group-item"><b>Correo: </b> {{ $details['email'] }}</li>
          <li class="list-group-item"><b>Número Celular:</b> {{ $details['cell'] }}</li>
          <li class="list-group-item"><b>Su consulta:</b> {{ $details['message'] }}</li>
        </ul>
    </div>
    <br/>
    <p>Gracias por hacer tu consulta! En la brevedad le respondemos

    </p>
</body>
</html>