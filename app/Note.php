<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function Category() {
        return $this->belongsTo(Category::class);
    }
}
