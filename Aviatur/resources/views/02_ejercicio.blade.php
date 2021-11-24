<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Comparacion de los numeros</h2>
    <form action="{{route('respuesta2')}}" method="POST">
        {{csrf_field()}}
        <label for="fname">Digite numero uno:</label><br>
        <input type="number" id="fname" name="numero1"><br>
        <label for="lname">Digite numero dos:</label><br>
        <input type="number" id="lname" name="numero2"><br>
        <label for="lname">Digite numero tres:</label><br>
        <input type="number" id="lname" name="numero3"><br>

        <input type="submit" value="Procesar">
    </form>
</body>
</html>
