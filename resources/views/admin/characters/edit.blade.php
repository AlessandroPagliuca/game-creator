@extends('layouts.app')

@section('content')
<div class="container">


    <h1>Edit Chracter: {{ $character->name }}</h1>

    <form action="{{ route('admin.characters.update', $character->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                value="{{ old('name', $character->name) }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="level">Level</label>
            <input type="text" class="form-control @error('level') is-invalid @enderror" name="level" id="level"
                 value="{{ old('level', $character->level) }}">
            @error('level')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="class">Class</label>
            <input type="text" class="form-control @error('class') is-invalid @enderror" name="class" id="class"
                 value="{{ old('class', $character->class) }}">
            @error('class')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="race">Race</label>
            <input type="text" class="form-control @error('race') is-invalid @enderror" name="race" id="race"
                 value="{{ old('race', $character->race) }}">
            @error('race')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="lifepoint">Lifepoint</label>
            <input type="text" class="form-control @error('lifepoint') is-invalid @enderror" name="lifepoint" id="lifepoint"
                 value="{{ old('lifepoint', $character->lifepoint) }}">
            @error('lifepoint')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="strength">Strength</label>
            <input type="text" class="form-control @error('strength') is-invalid @enderror" name="strength" id="strength"
                 value="{{ old('strength', $character->strength) }}">
            @error('strength')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="agility">Agility</label>
            <input type="text" class="form-control @error('agility') is-invalid @enderror" name="agility" id="agility"
                value="{{ old('agility', $character->agility) }}">
            @error('agility')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="main_weapon">Main Weapon</label>
            <input type="text" class="form-control @error('main_weapon') is-invalid @enderror" name="main_weapon" id="main_weapon"
                 value="{{ old('main_weapon', $character->main_weapon) }}">
            @error('main_weapon')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
</div>

@endsection
