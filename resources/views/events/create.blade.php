<!DOCTYPE html>
<html>
<head>
    <title>Créer un événement</title>
</head>

<body>

<h1>Créer un événement</h1>

<form method="POST" action="/events">
    @csrf

    <label>Titre :</label>
    <input type="text" name="title">

    <br>

    <label>Description :</label>
    <textarea name="description"></textarea>

    <br>

    <label>Date :</label>
    <input type="date" name="date">

    <br>

    <label>Heure :</label>
    <input type="time" name="time">

    <br>

    <label>Lieu :</label>
    <input type="text" name="location">

    <br>

    <label>Prix :</label>
    <input type="number" name="price">

    <br>

    <label>Capacité :</label>
    <input type="number" name="capacity">

    <br>

    <button type="submit">
        Créer
    </button>

</form>

</body>
</html>