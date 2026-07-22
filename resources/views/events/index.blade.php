<!DOCTYPE html>
<html>
<head>
    <title>Events</title>
</head>
<body>

<h1>Liste des événements</h1>

@foreach($events as $event)

    <div>
        <h2>{{ $event->title }}</h2>
        <p>{{ $event->description }}</p>
        <p>Date : {{ $event->date }}</p>
        <p>Lieu : {{ $event->location }}</p>
        <hr>
    </div>

@endforeach

</body>
</html>