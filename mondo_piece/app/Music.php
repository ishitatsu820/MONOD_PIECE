<?php

namespace MONDO_PIECE;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    //
    protected $table = 'musics';
    protected $fillable = ['title', 'artist', 'lyric'];

    
    public function user()
    {
    return $this->belongsTo('App\User');
    }
}
