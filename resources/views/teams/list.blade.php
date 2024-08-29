@extends('layouts.index')
@section('title','Teams')
@section('sidebar')
<x-sidebar/>
@endsection
@section('container')
<div class="dashboard">
<div class="content mt-1">
@if(isset($teams))

@foreach($teams as $team)
<div class="row row-cols-1 g-1 w-100 mb-1">
 
    <div class="col-md-8  height-100">
        <div class="card  text-white ">
            <div class="card-header d-flex flex-column justify-content-center">
                <div class="team-logo-parent">
                    <div class="team-logo">
                        <img class="img-fluid" src="{{asset('assets/images/logo1.png')}}" alt="Team Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-2 align-items-center">
                    <span class="px-2 rounded bg-success text-white">{{$team['nom']}}</span>
                    <span class="d-flex justify-content-center align-items-center">
                        <div class="round-1">
                            <div class="round-2">
                                <img class="img-fluid" src="{{asset('assets/images/uploads/'.$team->representant->image)}}">
                            </div>
                        </div>
                        <h6 class="mx-1">Coach:{{$team->representant->nom}}</h6>
                    </span>
                    <select class="-select px-4 rounded border-blue outline-none" name="players">
                        <option value="4">4</option>
                        <option value="18">18</option>
                    </select>
                </div>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NN</th>
                                <th>PP</th>
                                <th>PL</th>
                                
                                <th>MJ</th>
                                <th>CJ</th>
                                <th>CR</th>
                                <th>Goals</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($team->players as $player)
                             <tr>
                                <td>{{$player['dorsa']}}</td>
                                 <td class="d-flex justify-content-center align-items-center">
                                    <div class="round-1">
                                        <div class="round-2">
                                            <img class="img-fluid" src="{{asset('assets/images/uploads/'.$player['logo'])}}">
                                        </div>
                                    </div>
                                </td>
                                <td>{{$player['nom']}}</td>
                                <td>{{$player['match_joues']}}</td>
                                <td>{{$player['cartons_jaunes']}}</td>
                                <td>{{$player['cartons_rouges']}}</td>
                                <td>{{$player['buts_marques']}}</td>
                            </tr>
                           @endforeach
                          
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@php
 $opponents=$team_s->opponents($teams,$team);
@endphp

<div class="col-md-4  height-100 ">
    @foreach($opponents as $opponent)
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body p-0">
            <div class="card-gradient text-white p-4">
                <div class="row align-items-center">
                    <div class="col-4 text-center">
                        @if($team['image'])
                        <img class="img-fluid rounded-circle team-avatar" src="{{asset('assets/images/uploads/'.$team['image'])}}">
                        @else
                        <img class="img-fluid rounded-circle team-avatar" src="{{asset('assets/images/logo1.png')}}">
                        @endif
                          <h2 class="h4 mb-0">{{$team['nom']}}</h2>
                    </div>
                    <div class="col-4 text-center">
                        <div class="vs-text mb-3">VS</div>
                        <div class="d-flex flex-column align-items-center">
                            <div class="match-info rounded-pill px-3 py-1 mb-2">
                                <i class="fas fa-calendar-alt me-2"></i>
                                <span>
                                    {{$opponent['date_match']}}
                                </span>
                            </div>
                            <div class="match-info rounded-pill px-3 py-1">
                                <i class="fas fa-clock me-2"></i>
                                <span>
                                    {{$opponent['heure_matche'] ?? '15:00'}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        @if($opponent['image'])
                        <img class="img-fluid rounded-circle team-avatar" src="{{asset('assets/images/uploads/'.$opponent['image'])}}">
                        @else
                        <img class="img-fluid rounded-circle team-avatar" src="{{asset('assets/images/logo1.png')}}">
                        @endif
                         <h2 class="h4 mb-0">
                            {{$opponent['nom']}}
                         </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{-- @foreach($opponents as $opponent)
    <div class="card mb-1  ">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div class="team d-flex justify-content-center align-items-center ">
            <div class="team-text">
                <span class="px-2 rounded bg-white text-primary">{{$team['pseudo']}} </span>
             </div>
             <div class="team-l1">
                <div class="team-l2">
                    @if($team['image'])
                <img class="img-fluid" src="{{asset('assets/images/uploads/'.$team['image'])}}">
                @else
                <img class="img-fluid" src="{{asset('assets/images/logo1.png')}}">
                @endif
                </div>
             </div>
           </div>
           <div class="versus-time d-flex flex-column justify-content-center align-items-center">
            <div class="date-play">
                <h3 class="small-text">
                {{$opponent['date_match']}}   
                </h3>
                <h2>
                 VS    
                </h2>
                <h5>
                    {{$opponent['heure_match'] ?? '15:00'}} 
                </h5>

            </div>
            <div class="score">
                <span>--:--</span>
            </div>
           </div>
           <div class="team d-flex justify-content-center align-items-center ">
            
             <div class="team-l1">
                <div class="team-l2">
                    @if($opponent['image'])
                <img class="img-fluid" src="{{asset('assets/images/uploads/'.$opponent['image'])}}">
                @else
                <img class="img-fluid" src="{{asset('assets/images/logo1.png')}}">
                @endif
                </div>
             </div>
             <div class="team-text">
                <span class="px-2 rounded bg-white text-primary">
                    {{$opponent['pseudo']}}
                </span>
             </div>
           </div>
        </div>
    </div>
    @endforeach
    --}}
</div>

</div>
@endforeach

@endif

</div>
</div>
<link rel="stylesheet" href="{{asset('assets/css/teams.css')}}">
<style>
    .card-gradient {
       background-color: rgba(184, 134, 11, 0.2)
    }
    .team-avatar {
        width: 40px;
        height: 40px;
        border: 4px solid white;
    }
    .vs-text {
        font-size: 2rem;
        font-weight: 800;
    }
   
    .match-info {
        background-color: rgba(255, 255, 255, 0.2);
    }
</style>
@endsection
