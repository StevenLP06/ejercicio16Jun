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
    <h1 class="text-center">Editar datos de la nota</h1>
    <form action="{{route('notes.update',$note->id)}}" method="post">
        @csrf
        @method('put')
        <!-- <label for="">ID del Estudiante
            <select name="estudiante_id" id="student_id">
                <option selected>Seleccione el Estudiante</option>
                <option value="{{$note->student_id}}">{{$note->student_id}}</option>
            </select>
        </label> -->
        <label for="student_id">ID del Estudiante:
            <input type="number" name="estudiante_id" id="student_id" value="{{$note->student_id}}">
        </label>
        <label for="asignature_id">ID de la Asignatura:
            <input type="number" name="asignatura_id" id="asignature_id" value="{{$note->asignature_id}}">
        </label>
        <label for="qualification">Calificación:
            <input type="number" name="calificacion" id="qualification">
        </label>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>