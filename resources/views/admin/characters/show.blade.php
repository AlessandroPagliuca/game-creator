@extends('layouts.app')

@section('content')
<div class="text-light p-4">
        <h1 class=" text-center fw-bold fs-2 py-4">{{ $character->name }}</h1>
        <p>Level: {{$character->level}}</p>
        <p>Class: {{$character->class}}</p>
        <p>Breed: {{$character->race}}</p>
        <p>HP: {{$character->lifepoint}}</p>
        <p>Strength: {{$character->strength}}</p>
        <p>Agility: {{$character->agility}}</p>
        <p>Main Weapon: {{$character->main_weapon}}</p>
        <a class="m-1" href="{{ route('admin.characters.edit', $character->id) }}"><button class="btn btn-success"> Edit</button></a>
</div>

@endsection
