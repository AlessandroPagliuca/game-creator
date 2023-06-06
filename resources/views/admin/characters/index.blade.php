@extends('layouts.app')

@section('content')
    <h1 class=" text-center">Characters Cads</h1>
    <div class="container">
        <div class="row">
            @foreach ($characters as $character)
                <div class="card col-4">
                    <div class="card-body">
                        <p class="fs-4 card-title">{{ $character->name }}</p>
                        <p class="card-text">{{ $character->level }} lv.</p>
                        <p class="card-text">race: {{ $character->race }}</p>
                        <p class="card-text">lifepoint: {{ $character->lifepoint }}</p>
                        <p class="card-text">{{ $character->strength }} <i class="fa-solid fa-dumbbell"></i></p>
                        <p class="card-text">{{ $character->agility }} <i class="fa-solid fa-person-running-fast"></i></p>
                        <p class="card-text">weapon: {{ $character->main_weapon }}</p>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
