<?php

namespace MONDO_PIECE;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';
    protected $fillable = ['comment'];
    
}
