<?php

namespace App\Http\Controllers\Teams;

use Illuminate\Http\Request;
use App\Services\TeamServices\TeamService;
class ScoreController
{
    //
    protected $team;
    public function __construct(
        TeamService $tm
    ){
$this->team=$tm;
    }
    public function index(){
       // $teams=$this->team->teams();
       $historiques=$this->team->historiques();
        return view('teams.scores',compact('historiques'));
    }
}
