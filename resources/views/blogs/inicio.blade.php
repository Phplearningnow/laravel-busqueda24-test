<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>pagina de inicio de articulos</h1>
  
    @foreach ($blogs as $blog)
    <h4>{{ $blog->seccion }}</h4>
    <h2>{{ $blog->titulo }}</h2>
    <p>{{ $blog->descripccion }}</p> 
    @endforeach
</body>
</html>