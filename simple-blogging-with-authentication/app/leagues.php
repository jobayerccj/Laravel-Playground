<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leagues extends Model
{	
	protected $fillable = ['name'];

    public function bookmakers()
    {
        return $this->hasMany(LeagueBookmaker::class,'league_id');
    }

    public function bookmakers2()
    {
        return $this->belongsToMany(Bookmaker::class, 'league_bookmakers','league_id', 'bookmaker_id');
    }
}
