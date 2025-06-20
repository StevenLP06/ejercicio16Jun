<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1 class="text-center">Editar datos del estudiante</h1>
    <form action="{{route('students.update',$student->id)}}" method="post">
    @csrf
    @method('put')  
      <label for="name" class="form-label">Nombre: 
        <input type="text" class="form-control" name="nombre" id="name" value="{{$student->name}}">
      </label>
      <label for="document" class="form-label">Documento
        <input type="number" class="form-control" name="documento" id="document" value="{{$student->document}}">
      </label>
      <label for="email" class="form-label">Correo Electrónico
        <input type="email" class="form-control" name="correo" id="email" value="{{$student->email}}">
      </label>
      <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>