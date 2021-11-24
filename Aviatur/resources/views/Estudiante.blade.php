<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="{{route('opestudiante')}}" method="POST">
            @csrf
            <label for="fname">Digite nombre:</label><br>
            <input type="text" id="fname" name="nombre"><br>
            <label for="lname">Digite calificación del primer parcial:</label><br>
            <input type="number" id="lname" name="primer_parcial"><br>
            <label for="lname">Digite calificación del examen final:</label><br>
            <input type="number" id="lname" name="examen_final"><br>

            <input type="submit" value="Procesar">
        </form>
    </form>
</body>
</html>
