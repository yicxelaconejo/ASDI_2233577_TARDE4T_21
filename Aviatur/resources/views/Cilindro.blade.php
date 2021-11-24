<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('opcilindro')}}" method="POST">
        @csrf
        <label for="fname">Digite el valor del radio:</label><br>
        <input type="number" id="fname" name="r"><br>
        <label for="lname">Digite valor de la altura:</label><br>
        <input type="number" id="lname" name="h"><br>

        <input type="submit" value="Procesar">
    </form>
</body>
</body>
</html>
