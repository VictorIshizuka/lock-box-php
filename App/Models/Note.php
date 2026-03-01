<?php

namespace App\Models;

use Core\Database;

class Note

{
  public $id;
  public $title;
  public $note;
  public $created_at;
  public $updated_at;
  public $user_id;

  public static function query() {}
  public static function all($search)
  {
    $database = new Database(config('database'));
    return $database->query(
      "SELECT * FROM notes WHERE user_id = :user_id" . (
        $search ? " AND title LIKE :search" : ""
      ),
      self::class,
      array_merge(
        ['user_id' => auth()->id],
        $search ? ['search' => "%$search%"] : []
      )

    )->fetchAll();
  }
  public static function create($data)
  {
    $database = new Database(config('database'));
    return $database->query(
      "INSERT INTO notes (title, note, user_id, created_at, updated_at)
      VALUES (:title, :note, :user_id, :created_at, :updated_at)",
      params: [
        'title' => $data['title'],
        'note' => $data['note'],
        'user_id' => $data['user_id'],
        'created_at' => $data['created_at'],
        'updated_at' => $data['updated_at']

      ]
    );
  }
}
