
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color:green">Usuario {{$user->id}}</h1>
<br>
<br>

<h1>Nome:</h1><h2>{{ $user->name }} </h2><br><br>
<h1>Email:</h1><h2>{{ $user->email }} <h2>
</body>
</html>