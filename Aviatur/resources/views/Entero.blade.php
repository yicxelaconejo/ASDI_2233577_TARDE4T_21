<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('opentero')}}" method="POST">
        {{csrf_field()}}
        <label for="fname">Digite el numero hasta el que desee sumar:</label><br>
        <input type="number" id="fname" name="numero"><br>

        <input type="submit" value="Procesar">
    </form>
</body>
</html>
