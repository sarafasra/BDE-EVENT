<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un événement</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">

        <a class="navbar-brand fw-bold" href="/events">
            🎓 BDE Events
        </a>

        <div class="ms-auto">

            <a href="/events" class="btn btn-light me-2">
                Retour aux événements
            </a>

        </div>

    </div>
</nav>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card shadow border-0 rounded-4">

<div class="card-header bg-primary text-white text-center">

<h3>Créer un événement</h3>

</div>

<div class="card-body p-4">

<form action="{{ route('events.store') }}" method="POST">

@csrf

<div class="mb-3">
<label class="form-label">Titre</label>
<input type="text" name="title" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Description</label>
<textarea name="description" class="form-control" rows="4" required></textarea>
</div>

<div class="row">

<div class="col-md-6 mb-3">
<label class="form-label">Date</label>
<input type="date" name="date" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Heure</label>
<input type="time" name="time" class="form-control" required>
</div>

</div>

<div class="mb-3">
<label class="form-label">Lieu</label>
<input type="text" name="location" class="form-control" required>
</div>

<div class="row">

<div class="col-md-6 mb-3">
<label class="form-label">Prix (DH)</label>
<input type="number" name="price" class="form-control" min="0" value="0">
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Capacité</label>
<input type="number" name="capacity" class="form-control" min="1" required>
</div>

</div>

<div class="d-grid">

<button class="btn btn-primary btn-lg">
Créer l'événement
</button>

</div>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>