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
    <h1 class="text-center">Estudiantes</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Documento</th>
                <th scope="col">Correo</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            @csrf
            <tr>
            <form action="{{route('students.index')}}" method="get">
              <td>{{$student->id}}</td>
              <td>{{$student->name}}</td>
              <td>{{$student->document}}</td>
              <td>{{$student->email}}</td>
            </form>
                <td>
                    <a href="{{route('students.edit',$student->id)}}" class="btn btn-primary">Editar</a>
                    <form action="{{route('students.destroy',$student->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            @endforeach
            </tr>
        </tbody>
    </table>
    <form action="{{route('students.store')}}" method="post">
      @csrf
      <label for="name" class="form-label">Nombre: 
        <input type="text" class="form-control" name="nombre" id="name">
      </label>
      <label for="document" class="form-label">Documento
        <input type="number" class="form-control" name="documento" id="document">
      </label>
      <label for="email" class="form-label">Correo Electrónico
        <input type="email" class="form-control" name="correo" id="email">
      </label>
      <button type="submit" class="btn btn-success">Insertar</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>