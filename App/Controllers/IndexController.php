<?php

namespace App\Controllers;

use App\Models\Note;

class IndexController
{
  public function __invoke()
  {
    $notes = Note::all();

    $id = isset($_GET['id']) ? $_GET['id'] : $notes[0]->id;

    $filter = array_filter($notes, fn($n) => $n->id == $id);
    $noteSelected = array_pop($filter);

    return view('index', compact('notes', 'noteSelected'));
  }
}
