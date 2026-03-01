<?php

namespace App\Controllers;

use App\Models\Note;

class IndexController
{
  public function __invoke()
  {
    $search = $_GET['search'] ?? null;

    $notes = Note::all($search);

    $id = isset($_GET['id']) ? $_GET['id'] : (sizeof($notes) > 0 ? $notes[0]->id : null);

    $filter = array_filter($notes, fn($n) => $n->id == $id);
    $noteSelected = array_pop($filter);

    if (!$noteSelected) {
      return view('notes/not-found');
    }

    return view('index', compact('notes', 'noteSelected'));
  }
}
