@extends('layouts.index')
@section('title','Trophés')
@section('sidebar')
    <x-sidebar/>
@endsection
@section('container')
<div class="dashboard">
    <div class="content mt-1">
        @php
            $trophies = [
                ['mdi' => 'mdi-trophy', 'trophy' => 'Champion du Tournoi', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-trophy-variant', 'trophy' => 'Finaliste', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-soccer', 'trophy' => 'Meilleur Buteur', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-trophy-outline', 'trophy' => 'Meilleur Gardien de But', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-star', 'trophy' => 'Meilleur Joueur'],
                ['mdi' => 'mdi-shield', 'trophy' => 'Meilleur Défenseur', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-trophy-outline', 'trophy' => 'Meilleur Passer', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-trophy-outline', 'trophy' => 'Meilleur Entraîneur', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-handshake', 'trophy' => 'Équipe Fair-Play', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-star-circle', 'trophy' => 'Meilleur Jeune Talent', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-football', 'trophy' => 'Meilleur Joueur de Terrain', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-trophy-award', 'trophy' => 'Meilleur Joueur de la Saison', 'star' => 'mdi-star']
            ];
        @endphp
        <div class="row row-cols-1 row-cols-md-4 w-100 g-1">
            @foreach($trophies as $trophy)
            <div class="col mx-auto d-flex flex-column flex-grow-1 height-100">
                <div class="card flex-grow-1 position-relative">
                    @if(isset($trophy['star']) && $trophy['star'])
                        <div class="star">
                            <span class="mdi {{ $trophy['star'] }} text-warning"></span>
                        </div>
                    @endif
                    <div class="round-1">
                        <div class="round-2">
                            <span class="mdi {{ $trophy['mdi'] }} text-success fw-bold fs-5"></span>
                        </div>
                    </div>
                    <h6>{{ $trophy['trophy'] }}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
