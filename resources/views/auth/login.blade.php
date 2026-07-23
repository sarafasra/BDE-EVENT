<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion | BDE Events</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">

    <div class="row vh-100 align-items-center justify-content-center">

        <div class="col-md-5">

            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-body p-5">

                    <div class="text-center mb-4">

                        <h2 class="fw-bold text-primary">
                            🎓 BDE Events
                        </h2>

                        <p class="text-muted">
                            Connectez-vous à votre compte
                        </p>

                    </div>

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">

                        @csrf

                        <div class="mb-3">

                            <label class="form-label">
                                Adresse e-mail
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">
                                Mot de passe
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required>

                        </div>

                        <button class="btn btn-primary w-100">

                            Se connecter

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>