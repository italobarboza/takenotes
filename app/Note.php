<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function Category() {
        return $this->belongsTo(Category::class);
    }

    public static function getNotesFromUser($user_id) {
        return Note::where('user_id', $user_id)->orderBy('updated_at', 'desc')->get();
    }

    public static function getSharedNote($noteUrl) {
        return Note::where('url', $noteUrl)->first();
    }
}
