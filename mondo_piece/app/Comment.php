<?php

namespace MONDO_PIECE;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';
    protected $fillable = ['comment'];
    
    public function music()
    {
    return $this->belongsTo('MONDO_PIECE\Music');   
    }
    public function user()
    {
    return $this->belongsTo('MONDO_PIECE\User');   
    }
}
