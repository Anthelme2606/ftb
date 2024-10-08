<?php
namespace App\Repositories\TeamsRepositories;
use Illuminate\Support\Collection;
use App\Models\Team;
use App\Models\Player;
use App\Models\Poule;
use App\Models\PouleTeam;
use App\Models\TeamsVersus;
use App\Models\TeamEvents;
use App\Models\Representant;
use App\Models\MatchRecord;
use Carbon\Carbon;

class TeamRepository
{
    protected $model;
    
    protected $player;
    protected $p_team;
    protected $rep;
    protected $poule;

    public function __construct(Team $team,
    Poule $poule,
    PouleTeam $p_team,
    Player $player,Representant $rep)
    {
        $this->model = $team;
        $this->player = $player;
        $this->rep=$rep;
        $this->$p_team=$p_team;
        $this->poule=$poule;
    }
    public function createRecord(array $data){
        return MatchRecord::create($data);
    }
    public function records(){
        return MatchRecord::whereDate('created_at', now()->format('Y-m-d'))->get();
    }
    public function getFirstThreeRecords(){
        return MatchRecord::orderBy('created_at', 'desc') 
                          ->take(3)
                          ->get();
                           
    }
    public function allRecords(){
        return MatchRecord::all();
    }
    
    
    public function createEvent(array $data){
        return TeamEvents::create($data);
    }
    public function matchProche()
    {
        $record = MatchRecord::whereNotNull('created_at')
                     ->orderBy('created_at', 'desc')
                     ->first();

// return TeamsVersus::whereNotNull('date_match')
//             ->orderByRaw('ABS(TIMESTAMPDIFF(SECOND, date_match, NOW()))')
//             ->first();

     return $record->match;
    }
    
    public function matchOrga(){
        return TeamsVersus::whereNotNull('date_match')->orderBy('date_match', 'asc')->get();
    }
    public function matches(){
        return TeamsVersus::all(); 
    }
    public function match_event_eachplayer($match_id,$team_id,$player_id){
        $event= TeamEvents::where('match_id',$match_id)
                           ->where('team_id',$team_id)
                           ->where('player_id',$player_id)
                           ->first();
        
        return $event;
    }
    public function findEvent($id){
        return TeamEvents::find($id);
    }
    public function updateEvent($match_id, $team_id, $player_id, TeamEvents $event_e)
{
    // Récupérer l'événement pour ce joueur, match et équipe spécifiques
    $event = $this->match_event_eachplayer($match_id, $team_id, $player_id);

    // Mettre à jour l'événement avec les nouvelles valeurs
    return $event->update($event_e->toArray());
}
public function updatePlayer($id, Player $player_e){
    $player=Player::find($id);
    return $player->update($player_e->toArray());
}
public function updateTeam($id, Team $team_e){
    $team=Team::find($id);
    return $team->update($team_e->toArray());
}
public function getPlayer($id){
    $player=Player::find($id);
   return $player;
}
public function poules(){
    return Poule::all();
}
public function rankTeamsForAllPoules()
{
    
    $poules = $this->poules();

    $rankedPoules = []; 

    // Loop through each poule
    foreach ($poules as $poule) {
        
        $rankedTeams = $poule->teams->sort(function ($a, $b) {
            // Calculate the score for both teams
            $scoreA = ($a->victories * 3) + ($a->nul * 1);
            $scoreB = ($b->victories * 3) + ($b->nul * 1);

            // First, compare by score (higher score ranks higher)
            if ($scoreB != $scoreA) {
                return $scoreB - $scoreA;
            }

            // If the score is the same, compare by goals conceded (fewer is better)
            if ($a->buts_encaissees != $b->buts_encaissees) {
                return $a->buts_encaissees - $b->buts_encaissees;
            }

            // If goals conceded are the same, compare by goals scored (optional)
            if ($a->buts_marques != $b->buts_marques) {
                return $b->buts_marques - $a->buts_marques;
            }

            // If everything is equal, return 0 (they are ranked the same)
            return 0;
        });

        // Assign ranks to the teams
        $rankedTeams = $rankedTeams->values()->map(function ($team, $index) {
            $team->rank = $index + 1;
            return $team;
        });

        // Add the poule and its ranked teams to the result array
        $rankedPoules[] = [
            'poule' => $poule->name,
            'teams' => $rankedTeams
        ];
    }

    return $rankedPoules;
}


public function teams(){
    return Team::all();
}
public function getMatchStats($matchId, $teamId)
{

    $stats = TeamEvents::where('match_id', $matchId)
        ->where('team_id', $teamId)
        ->selectRaw('
            SUM(but_marques) as total_goals,
            SUM(carton_rouge) as total_red_cards,
            SUM(carton_jaune) as total_yellow_cards,
            match_id,
            team_id
        ')
        ->groupBy('match_id', 'team_id')
        ->first();

    return [
        'goals' => $stats->total_goals,
        'yellow_cards' => $stats->total_yellow_cards,
        'red_cards' => $stats->total_red_cards,
        'match_id' => $stats->match_id,
        'team_id' => $stats->team_id,
    ];
}
public function match($matchid){
    return TeamsVersus::find($matchid);
}
public function getMatchDetails($matchId){
    $match_cur=$this->match($matchId);
    $team1=$match_cur->team1;
    $team2=$match_cur->team2;
    $team1Events=[];
    $team2Events=[];
   $yes1=$this->ifPlay($matchId,$team1->id);
   $yes2=$this->ifPlay($matchId,$team2->id);
   if(isset($yes1) && isset($yes2)){
    $match=TeamsVersus::with(['team1','team2','events.player'])->findOrFail($matchId);
     $stats1=$this->getMatchStats($matchId,$match->team1->id);
     $stats2=$this->getMatchStats($matchId,$match->team2->id);
      foreach($match->events as $event){
       $minute=$event->updated_at->format('i');
       if($event->but_marques > 0){
        if($event->team_id==$match->team1_id){
          
            $team1Events[]=[
                'player'=>$event->player->nom,
                'minute'=>$minute,
                  'buts'=>$event['but_marques'],
                'type'=>'but',
            ];
        }elseif($event->team_id==$match->team2_id){
           

            $team2Events[]=[
                'player'=>$event->player->nom,
                'minute'=>$minute,
                'buts'=>$event['but_marques'],
                'type'=>'but',
            ];
        }
       
       }
       if($event->carton_rouge >0){

        if($event->team_id==$match->team1_id){
          
            $team1Events[]=[
                'player'=>$event->player->nom,
                
                'rouges'=>$event->carton_rouge,
                'minute'=>$minute,
                'type'=>'rouge',
            ];
        }elseif($event->team_id==$match->team2_id){
           
            $team2Events[]=[
                'player'=>$event->player->nom,
                'rouges'=>$event->carton_rouge,
                'minute'=>$minute,
                'type'=>'rouge',
            ];
        }
            
       }
       if($event->carton_jaune >0){

        if($event->team_id==$match->team1_id){
          
            $team1Events[]=[
                'player'=>$event->player->nom,
                'jaunes'=>$event->carton_jaune,
                'minute'=>$minute,
                'type'=>'jaune',
            ];
        }elseif($event->team_id==$match->team2_id){
           
            $team2Events[]=[
                'player'=>$event->player->nom,
                 'jaunes'=>$event->carton_jaune,
                'minute'=>$minute,
                'type'=>'jaune',
            ];
        }
            
       }
      }
      return [
        'team1'=>[
            'nom'=>$match->team1->nom,
            'image'=>$match->team1->image,
        ],

        'goals1'=>$stats1['goals'],
        'goals2'=>$stats2['goals'],
       'team2'=>[
            'nom'=>$match->team2->nom,
            'image'=>$match->team2->image,
        ],
        'time'=>$match->heure_match,
        'date'=>$match->date_match,
         'team1Events'=>$team1Events,
         'team2Events'=>$team2Events,

      ];
    }
    
}
public function ifPlay($matchid,$teamid){
    return TeamEvents::where('team_id',$teamid)
                  ->where('match_id',$matchid)
                  ->first();
}

public  function goals($match_id, $team_id)
{
    return TeamEvents::where('match_id', $match_id)
                ->where('team_id', $team_id)
                ->sum('but_marques');
}
public function getTopScoringPlayers()
{
    // Retrieve all players ordered by goals scored (buts_marques) in descending order
    $players = Player::orderBy('buts_marques', 'desc')->get();

    // Initialize an empty array to hold the top 6 players
    $topPlayers = [];
    
    // Loop through the players and select the top 6
    foreach ($players as $player) {
        // If we already have 6 players, stop adding more
        if (count($topPlayers) >= 6) {
            break;
        }

        $index = null;
        foreach ($topPlayers as $key => $topPlayer) {
            if ($topPlayer->buts_marques == $player->buts_marques) {
                $index = $key;
                break;
            }
        }

        if ($index !== null) {
           
            array_splice($topPlayers, $index, 0, [$player]);
        } else {
           
            $topPlayers[] = $player;
        }
    }

    return $topPlayers;
}

public  function team_event($match_id, $team_id)
{
    return TeamEvents::where('match_id', $match_id)
                ->where('team_id', $team_id)
                ->first();
}
public function countVictories($teamId)
{
    
    return TeamEvents::where('team_id', $teamId)
                     ->where('victoire', 1)
                     ->count();
}
public function playes($teamId)
{
    $victories = TeamEvents::where('team_id', $teamId)
                            ->where('victoire', 1)
                            ->count();

    $draws = TeamEvents::where('team_id', $teamId)
                        ->where('nul', 1)
                        ->count();

    $defeats = TeamEvents::where('team_id', $teamId)
                          ->where('defaite', 1)
                          ->count();

   return $victories+$draws +$defeats;
}

public function countDefaites($teamId)
{
    
    return TeamEvents::where('team_id', $teamId)
                     ->where('defaite', 1)
                     ->count();
}
public function countNuls($teamId)
{
    
    return TeamEvents::where('team_id', $teamId)
                     ->where('nul', 1)
                     ->count();
}

public function updateMatchResults( $team1_event, $team2_event, $goals1, $goals2)
{
   
    if ($goals1 > $goals2) {
        // Team 1 wins
        $team1_event->victoire = 1;
        $team1_event->defaite=0;
        $team2_event->victoire= 0;
        $team2_event->defaite= 1;
        $team1_event->nul = 0;
        $team2_event->nul = 0;
    } elseif ($goals1 < $goals2) {
        $team2_event->victoire = 1;
        $team2_event->defaite=0;
        $team1_event->victoire= 0;
        $team1_event->defaite= 1;
        $team1_event->nul = 0;
        $team2_event->nul = 0;
       
    }elseif($goals1===$goals2){
        $team1_event->nul = 1;
        $team2_event->nul = 1;
        $team1_event->victoire = 0;
        $team1_event->defaite = 0;
        $team2_event->victoire = 0;
        $team2_event->defaite = 0;
      
    }

    $team1_event->save();
    $team2_event->save();
}

   

    public function getAll()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function create_match(array $data)
    {
        return TeamsVersus::create($data);
    }
    public function versusByDate($date)
    {
        return TeamsVersus::where('date_match',$date)->first();
    }
    public function versusById($id)
    {
        return TeamsVersus::find($id);
    }
    public function pouleExist($name){
        $name = trim($name);
        $name = str_replace(' ', '', $name);
        $poule=Poule::where('name',$name)->first();
        if($poule && $poule!==null){
            return true;
        }
        return false;
    }
    public function createTeamPoule( array $data){
        return $this->p_team->create($data);
    }
    public function getPTeams(){
        return PouleTeam::all();
    }
    public function getPoules(){
        return Poule::all();
    }
    public function getPoule($id){
        return Poule::find($id);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
    public function find_p($id)
    {
        return $this->player->find($id);
    }
    public function find_r($id)
    {
        return $this->rep->find($id);
    }

    public function update($id, array $data)
    {
        $team = $this->model->find($id);
       return $team->update($data);
    }
    public function update_r($id, array $data)
    {
        $rep = $this->rep->find($id);
       return $rep->update($data);
    }
    public function but_carton($id, array $data)
    {
     
        $player = $this->player->find($id);
    
        if ($player) {
          
            $player->update($data);
    
            return true;
        }
    
        return false;
    }
    public function createPoule( array $data){
        return $this->poule->create($data);
    }
    
    public function update_p($id, array $data)
    {
        $play = $this->player->find($id);

      return $play->update($data);
    }
    public function getD($dorsa, $team_p)
    {
         $play = $this->player->where('dorsa', $dorsa)->first();
    
        if ($play) {
           
            foreach ($team_p as $p) {
              
                if ($p['dorsa'] === $play->dorsa) {
                    return $play; 
                }
            }
        }
    
       
        return null;
    }
    public function getP($dorsa, $team_p)
    {
         $play = $this->player->where('dorsa', $dorsa)->first();
    
        if ($play) {
           
            foreach ($team_p as $p) {
              
                if ($p['id'] === $play->id) {
                    return $play; 
                }
            }
        }
    
       
        return null;
    }
    
    public function getByName($name)
{
  
    return Team::where('nom', $name)->first();
}
public function getByName2($name)
{
  
    return Player::where('nom', $name)->first();
}
public function getByName3($name)
{
  
    return Representant::where('nom', $name)->first();
}

    public function delete($id)
    {
        $team = $this->model->find($id);
        if ($team) {
            $team->delete();
            return true;
        }
        return false;
    }
}
