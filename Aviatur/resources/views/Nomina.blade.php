<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('opnomina')}}" method="POST">
        @csrf
        <label for="fname">Digite nombres:</label><br>
        <input type="text" id="fname" name="Nombre"><br>
        <label for="lname">Digite valor del salario:</label><br>
        <input type="number" id="lname" name="Salario"><br>

        <input type="submit" value="Procesar">
</body>
</html>

