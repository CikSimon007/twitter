<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>dashboard</h1>

    <?php
        foreach ($users as $user) {
            echo $user["name"];
            echo $user["age"];
            echo "<br>";
        }
        
    ?>

    @foreach ($users as $user)
    <h1>{{$user["name"]}}</h1>
    <h2>{{$user["age"]}}</h2>

        @if ($user["age"] >= 18)
            Pozuivatel {{$user["name"]}} ma {{$user["age"]}} rokov a preto moze soferovat auto bez spolujazdca s vodicakom.
        @else
            Pozuivatel {{$user["name"]}} ma {{$user["age"]}} rokov a preto nemoze sam soferovat auto.
        @endif
    @endforeach
</body>
</html>