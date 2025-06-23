<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.notesCrud')->with('notes', $notes);
    }

    public function store(Request $request)
    {
        $note = new Note;
        $note->student_id = $request->estudiante_id;
        $note->asignature_id = $request->asignatura_id;
        $note->qualification = $request->qualification;
        $note->save();
        return redirect()->route('notes.index');
    }

    public function edit($id)
    {
        # Corregir todo lo de la llave foránea
        $note = Note::find($id);
        # Hay que mandar todos los registros para poder iterar por Todos los estudiantes con ID
        return view('notes.notesEdit')->with('note',$note);
    }

    public function update(Request $request, $id)
    {
        $note = Note::find($id);
        $note->student_id = $request->estudiante_id;
        $note->asignature_id = $request->asignatura_id;
        $note->qualification = $request->calificacion;
        $note->save();
        return redirect()->route('notes.index');
    }

    public function destroy($id)
    {
        $note = Note::find($id);
        $note->delete();
        return redirect()->route('notes.index');
    }
}
