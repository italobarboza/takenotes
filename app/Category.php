<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Note() {
        return $this->hasMany(Note::class);
    }
}
