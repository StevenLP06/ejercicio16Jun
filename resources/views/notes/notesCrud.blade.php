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
    <h1 class="text-center">Notas</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">#Estudiante</th>
                <th scope="col">#Asignatura</th>
                <th scope="col">Calificación</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $note)
            @csrf
            <tr>
            <form action="{{route('notes.index')}}" method="get">
              <td>{{$note->id}}</td>
              <td>{{$note->student_id}}</td>
              <td>{{$note->asignature_id}}</td>
              <td>{{$note->qualification}}</td>
            </form>
                <td>
                    <a href="{{route('notes.edit',$note->id)}}" class="btn btn-primary">Editar</a>
                    <form action="{{route('notes.destroy',$note->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            @endforeach
            </tr>
        </tbody>
    </table>
    <form action="{{route('notes.store')}}" method="post">
      @csrf
      <label for="name" class="form-label">Nombre: 
        <input type="text" class="form-control" name="nombreMateria" id="name">
      </label>
      <button type="submit" class="btn btn-success">Insertar</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>