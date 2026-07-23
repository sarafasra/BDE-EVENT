<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BDE Events</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

        <a class="navbar-brand" href="/events">
            🎓 BDE Events
        </a>

        <div class="ms-auto">

            <a href="/events" class="btn btn-light me-2">
                Événements
            </a>

            @if(auth()->user()->role == 'admin')
                <a href="/events/create" class="btn btn-warning me-2">
                    Créer un événement
                </a>
            @endif

            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-danger">
                    Déconnexion
                </button>
            </form>

        </div>

    </div>
</nav>

<div class="container mt-5">

<h2 class="mb-4">Liste des événements</h2>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<div class="row">

@foreach($events as $event)

<div class="col-md-4 mb-4">
<div class="card border-0 shadow-lg rounded-4 h-100">

    <div class="card-body">

        <h4 class="fw-bold text-primary mb-3">
            {{ $event->title }}
        </h4>

        <p class="text-muted">
            {{ $event->description }}
        </p>

        <hr>

        <p class="mb-2">
            📅 <strong>Date :</strong> {{ $event->date }}
        </p>

        <p class="mb-2">
            🕒 <strong>Heure :</strong> {{ $event->time }}
        </p>

        <p class="mb-2">
            📍 <strong>Lieu :</strong> {{ $event->location }}
        </p>

        <p class="mb-3">
            👥 <strong>Places :</strong>
            {{ $event->reservations()->count() }}
            /
            {{ $event->capacity }}
        </p>

        @if($event->price == 0)

            <span class="badge bg-success fs-6 px-3 py-2 mb-3">
                🎉 Gratuit
            </span>

        @else

            <span class="badge bg-warning text-dark fs-6 px-3 py-2 mb-3">
                💰 {{ number_format($event->price,2) }} DH
            </span>

        @endif

        @if(auth()->user()->role == 'admin')

<div class="d-flex gap-2 mt-3">

    <a href="{{ route('events.edit',$event->id) }}"
       class="btn btn-warning w-50">
        ✏ Modifier
    </a>

    <form action="{{ route('events.destroy',$event->id) }}"
          method="POST"
          class="w-50">

        @csrf
        @method('DELETE')

        <button
            class="btn btn-danger w-100"
            onclick="return confirm('Supprimer cet événement ?')">

            🗑 Supprimer

        </button>

    </form>

</div>

@endif

        @if(auth()->user()->role == 'student')

            <div class="mt-3">

                @if($event->price == 0)

                    <form action="{{ route('reservations.store',$event->id) }}" method="POST">

                        @csrf

                        <button class="btn btn-primary w-100 rounded-pill">
                            🎟 S'inscrire
                        </button>

                    </form>

                @else

                    <button class="btn btn-outline-secondary w-100 rounded-pill" disabled>
                        Paiement requis
                    </button>

                @endif

            </div>

        @endif

    </div>

</div>

</div>

@endforeach

</div>

</div>

</body>
</html>