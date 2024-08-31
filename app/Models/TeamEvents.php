<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamEvents extends Model
{
    use HasFactory;
    protected $table="team_events";
    protected $fillable=[
        'team_id',
        'match_id',
        'player_id',
        'carton_jaune',
        'carton_rouge',
        'but_marques'
    ];
    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }
    
    public function match()
    {
        return $this->belongsTo(TeamsVersus::class,'match_id');
    }
    
    public function team()
    {
        return $this->belongsTo(Team::class,'team_id');
    }
   
   
}
