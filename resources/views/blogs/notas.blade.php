<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>editar anuncio</h1>
    @foreach ($blogs as $blog)
    <h2>{{ $blog->title }}</h2>
    <p>{{ $blog-> body }}</p> 
    @endforeach
 
</body>





</html>