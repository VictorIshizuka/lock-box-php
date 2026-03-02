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
    return redirect('/notes');
  }

  public function update()
  {
    if (request()->post('id')) {
      $validation = Validation::validate([
        'title' => ['required', 'min:3', 'max:255'],
        'note' => ['required']
      ], request()->all());

      if ($validation->isInvalid()) {
        return redirect('/notes?id=' . request()->post('id'));
      }

      Note::update(request()->all());

      flash()->push('message', 'Nota atualizada com sucesso! 👍');
      return redirect('/notes?id=' . request()->post('id'));
    }

    flash()->push('validations', 'Nota não encontrada.');
    return redirect('/notes');
  }

  public function destroy()
  {
    if (request()->post('id')) {
      Note::delete(request()->post('id'));

      flash()->push('message', 'Nota deletada com sucesso! 👍');
      return redirect('/notes');
    }
    flash()->push('validations', 'Nota não encontrada.');
    return redirect('/notes');
  }
}
