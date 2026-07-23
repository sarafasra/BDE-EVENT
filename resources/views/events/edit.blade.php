<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un événement</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow p-4">

<h2 class="mb-4 text-primary">
    Modifier un événement
</h2>

<form action="{{ route('events.update',$event->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Titre</label>
        <input
            type="text"
            name="title"
            class="form-control"
            value="{{ old('title',$event->title) }}">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea
            name="description"
            class="form-control">{{ old('description',$event->description) }}</textarea>
    </div>

    <div class="mb-3">
        <label>Date</label>
        <input
            type="date"
            name="date"
            class="form-control"
            value="{{ old('date',$event->date) }}">
    </div>

    <div class="mb-3">
        <label>Heure</label>
        <input
            type="time"
            name="time"
            class="form-control"
            value="{{ old('time',$event->time) }}">
    </div>

    <div class="mb-3">
        <label>Lieu</label>
        <input
            type="text"
            name="location"
            class="form-control"
            value="{{ old('location',$event->location) }}">
    </div>

    <div class="mb-3">
        <label>Prix</label>
        <input
            type="number"
            name="price"
            class="form-control"
            value="{{ old('price',$event->price) }}">
    </div>

    <div class="mb-3">
        <label>Capacité</label>
        <input
            type="number"
            name="capacity"
            class="form-control"
            value="{{ old('capacity',$event->capacity) }}">
    </div>

    <button class="btn btn-primary">
        💾 Modifier
    </button>

    <a href="/events" class="btn btn-secondary">
        Annuler
    </a>   

</form>

</div>

</div>

</body>
</html>