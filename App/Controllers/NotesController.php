<?php

namespace App\Controllers;

use App\Models\Note;
use Core\Validation;

class NotesController
{

  public function index()
  {
    return view('notes/create');
  }

  public function store()
  {
    $validation = Validation::validate([
      'title' => ['required', 'min:3', 'max:255'],
      'note' => ['required']
    ], $_POST);

    if ($validation->isInvalid()) {
      return view('notes/create');
    }

    Note::create([
      'title' => $_POST['title'],
      'note' => $_POST['note'],
      'user_id' => auth()->id,
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s')
    ]);

    flash()->push('message', 'Nota criada com sucesso! 👍');
    return redirect('/');
  }
}
