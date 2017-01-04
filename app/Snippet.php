<?php

namespace App;

class Snippet extends Model
{
    public function forks()
    {
        return $this->hasMany(Snippet::class, 'forked_id');
    }

    public function originalSnippet()
    {
        return $this->belongsTo(Snippet::class, 'forked_id');
    }

    public function isAFork()
    {
        return !!$this->originalSnippet;
    }
}
