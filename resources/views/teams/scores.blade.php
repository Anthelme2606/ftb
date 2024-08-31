@extends('layouts.index')
@section('title','Historiques')
@section('sidebar')
<x-sidebar/>
@endsection
@section('container')
<div class="dashboard">
<div class="content mt-1">
    @php

$historiques = array_filter($historiques, function ($item) {
    return !in_array(null, $item, true);
});
// dd($historiques)
    @endphp
     <style>
   .card {
            height: 100%;
        }
        .yellow-card {
            background-color: #ffc107;
            color: #000;
        }
        .red-card {
            background-color: #dc3545;
            color: #fff;
        }
   </style>
    @if(isset($historiques) && !empty($historiques) && $historiques!==null)
    {{-- {{dd($historiques)}} --}}
    <div class="row row-cols-1 row-cols-md-3 w-100 g-1">
        @foreach($historiques as $keys=>$values)
 
       
        @if(isset($values)&& isset($keys) && !empty($values))
        @foreach($values as $sub_k=>$value)
        <div class="col height-100">
            <div class="card ">
                <div class="card-header text-center">
                   
                    <p class="text-muted">{{
                        $value['date']
                       }}</p>
                    <div class="d-flex justify-content-center align-items-center">
                        @if(!empty($value['team1']['image']))
                        <div class="round-1">
                            <div class="round-2">
                        <img class="img-fluid" src="{{asset('assets/images/uploads/'.$value['team1']['image'])}}">
                    </div>  
                    </div>
                        @else
                        <div class="round-1">
                            <div class="round-2">
                     
                       <img class="img-fluid" src="{{asset('assets/images/logo1.png')}}">
                    </div>  
                </div>
                       @endif
                        <span class="fs-4 fw-bold">{{$value['goals1']}}</span>
                        <span class="fs-4 fw-bold mx-2">-</span>
                        <span class="fs-4 fw-bold">{{$value['goals2']}}</span>
                        @if(!empty($value['team2']['image']))
                        <div class="round-1">
                            <div class="round-2">
                        <img class="img-fluid" src="{{asset('assets/images/uploads/'.$value['team2']['image'])}}">
                            </div>
                        </div>
                        @else
                        <div class="round-1">
                            <div class="round-2">
                     
                       <img class="img-fluid" src="{{asset('assets/images/logo1.png')}}">
                            </div >
                        </div>
                       @endif
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="text-center">
                                {{$value['team1']['nom']}}
                            </h6>
                            <ul class="list-unstyled">
                                @if(isset($value['team1Events']))
                                @foreach($value['team1Events'] as $event1)
                                @if($event1['type']=='but' || $event1['type']=='jaune' || $event1['type']=='rouge')
                                <li class="d-flex justify-content-between align-items-center">
                                    {{$event1['player']}}
                                    <span>
                                        @if(isset($event1['buts']))
                                        <span class="badge bg-secondary me-1">⚽{{ $event1['buts']}}</span>
                                        @endif
                                        @if(isset($event1['jaunes']))
                                        <span class="badge yellow-card">▪{{$event1['jaunes']}}</span>
                                        @endif
                                        @if(isset($event1['rouges']))
                                        <span class="badge red-card">▪{{$event1['rouges']}}</span>
                                        @endif
                                    </span>
                                </li>
                                @endif
                                @endforeach
                                @endif
                                
                                
                               
                             
                                
                            </ul>
                        </div>
                        <div class="col-6">
                            <h6 class="text-center">
                                {{$value['team2']['nom']}}
                            </h6>
                            <ul class="list-unstyled">
                                @if(isset($value['team2Events']))
                                @foreach($value['team2Events'] as $event2)
                                @if($event2['type']=='but' || $event2['type']=='jaune' || $event2['type']=='rouge')
                                <li class="d-flex justify-content-between align-items-center">
                                    {{$event2['player']}}
                                    <span>
                                        @if(isset($event2['buts']))
                                        <span class="badge bg-secondary me-1">⚽{{ $event2['buts']}}</span>
                                        @endif
                                        @if(isset($event2['jaunes']))
                                        <span class="badge yellow-card">▪{{$event2['jaunes']}}</span>
                                        @endif
                                        @if(isset($event2['rouges']))
                                        <span class="badge red-card">▪{{$event2['rouges']}}</span>
                                        @endif
                                    </span>
                                </li>
                                @endif
                                @endforeach
                                @endif
                                
                                
                               
                             
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
       
       
        @endforeach 
        @endif
        @endforeach
        </div> 
        @endif
      
    </div>
</div>
@endsection