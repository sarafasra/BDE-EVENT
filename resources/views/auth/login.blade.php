<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>

<body>

<h2>Connexion</h2>

@if($errors->any())
    <div>
        {{ $errors->first() }}
    </div>
@endif


<form action="{{ route('login.post') }}" method="POST">

    @csrf

    <div>
        <label>Email</label>
        <input type="email" name="email">
    </div>


    <div>
        <label>Password</label>
        <input type="password" name="password">
    </div>


    <button type="submit">
        Se connecter
    </button>

</form>

</body>
</html>