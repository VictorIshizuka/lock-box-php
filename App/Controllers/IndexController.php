<?php

namespace App\Controllers;

use App\Models\Note;

class IndexController
{
  public function __invoke()
  {

    $notes = Note::all(request()->get('search'));

    if (! $noteSelected = $this->noteSelected($notes)) {
      return view('notes/not-found');
    }

    return view('index', compact('notes', 'noteSelected'));
  }

  private function noteSelected($notes)
  {
    $id = request()->get('id', (sizeof($notes) > 0 ? $notes[0]->id : null));

    $filter = array_filter($notes, fn($n) => $n->id == $id);

    return  array_pop($filter);
  }
}
