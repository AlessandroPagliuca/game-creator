@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bold fs-2 py-4">Character: {{ $character->name }}</h1>

                </div>
                <div class="col-12">
                    <p class="badge badge-pill bg-dark p-2">Level: {{ $character->level }}</p>

                </div>
                <div class="col-12">
                    <p class="badge badge-pill bg-dark  p-2">Class: {{ $character->class }}</p>

                </div>
                <div class="col-12">
                    <p class="badge badge-pill bg-dark p-2">Breed: {{ $character->race }}</p>

                </div>
                <div class="col-12">
                    <p class="badge badge-pill bg-dark p-2">HP: {{ $character->lifepoint }}</p>

                </div>
                <div class="col-12 ">
                    <p class="badge badge-pill bg-dark p-2">Strength: {{ $character->strength }}</p>

                </div>
                <div class="col-12 ">
                    <p class="badge badge-pill bg-dark p-2">Agility: {{ $character->agility }}</p>

                </div>
                <div class="col-12">
                    <p class="badge badge-pill bg-dark text-uppercase p-2">Main Weapon:
                        {{ $character->main_weapon }}</p>

                </div>
                <div class="col-12">
                    <a class="m-1 btn btn-success" href="{{ route('admin.characters.edit', $character->id) }}">
                        Edit
                    </a>
                    <a class="m-1 btn btn-warning" href="{{ route('admin.characters.index') }}">
                        Go back
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
