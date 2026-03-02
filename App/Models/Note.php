<?php

namespace App\Models;

use Carbon\Carbon;
use Core\Database;

class Note
{
    public $id;

    public $title;

    public $note;

    public $created_at;

    public $updated_at;

    public $user_id;

    public function note()
    {
        if (session()->get('show')) {
            return decrypt($this->note);
        }

        return str_repeat('*', strlen($this->note));
    }

    public static function query() {}

    public static function all($search = null)
    {
        $database = new Database(config('database'));

        return $database->query(
            'SELECT * FROM notes WHERE user_id = :user_id'.(
                $search ? ' AND title LIKE :search' : ''
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
            'INSERT INTO notes (title, note, user_id, created_at, updated_at)
      VALUES (:title, :note, :user_id, :created_at, :updated_at)',
            params: [
                'title' => $data['title'],
                'note' => encrypt($data['note']),
                'user_id' => $data['user_id'],
                'created_at' => $data['created_at'],
                'updated_at' => $data['updated_at'],

            ]
        );
    }

    public static function update($data)
    {
        $database = new Database((config('database')));

        $set = 'title = :title';

        if ($data['note']) {

            $set .= ', note = :note';
        }

        return $database->query(
            "UPDATE notes
            SET $set
            WHERE id = :id",
            params: array_merge([
                'title' => $data['title'],
                'id' => $data['id'],
            ], $data['note'] ? ['note' => encrypt($data['note'])] : [])
        );
    }

    public static function delete($id)
    {
        $database = new Database((config('database')));

        return $database->query('DELETE FROM notes WHERE id = :id', params: ['id' => $id]);
    }

    public function createdAt()
    {
        return Carbon::parse($this->created_at);
    }

    public function updatedAt()
    {
        return Carbon::parse($this->updated_at);
    }
}
