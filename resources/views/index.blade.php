<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Corse</h1>
    @foreach ($trains as $item)
        <div>
            <h2>Corsa nr. {{$item->id}}</h2>
            <div>Treno: {{$item->azienda}}</div>
            <div>Stazione di partenza: {{$item->stazione_di_partenza}}</div>
            <div>Stazione di arrivo: {{$item->stazione_di_arrivo}}</div>
            <div>Orario di partenza: {{$item->orario_di_partenza}}</div>
            <div>Orario di arrivo: {{$item->orario_di_arrivo}}</div>
            <div>Nr. Carrozze: {{$item->nr_carrozze}}</div>
        </div>
    @endforeach
</body>
</html>