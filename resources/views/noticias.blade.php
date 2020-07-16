<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Noticias Venezuela</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 40px;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-left {
            text-align: left;
            right: 10px;
        }

        .top-right {
            text-align: right;
            right: 10px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 34px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="content">
        <p>Venezuela</p>
        @foreach ($registros as $registro)
        <h5 class="top-right">Fecha: {{ $registro[0] }} </h5>
        <div class="title ">
            Titular: {{ $registro[3] }}
        </div>
        <h4 class="top-left">Fuente: <a href=" {{ $registro[2] }}"> {{ $registro[1] }} </a></h4>
        <div class="links top-right">
            <a href="{{ $registro[4] }}">Leer más...</a>
        </div>
        <hr>
        @endforeach
    </div>
    </div>
</body>

</html>
