<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <table border="1" class="table">
        <tr>
            <td>id</td>
            <td>Nom</td>
            <td>Adresse</td>
            <td>TVA</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->nom}}</td>
            <td>{{$user->adresse}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
