<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Resultado de la suma es: @if(isset($respuesta))
                                    {{$respuesta}}
                                @endif</h2>
    <form action="{{route('operacion')}}" method="post">
    {{csrf_field()}}
            <label for="fname">Digite el primer numero:</label><br>
            <input type="number" id="fname" name="numero1"><br>
            <label for="lname">Digite el segundo numero:</label><br>
            <input type="number" id="lname" name="numero2"><br>

            <input type="submit" value="btn_Procesar">

    </form>
</body>
</html>
