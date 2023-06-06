@extends('layouts.app')

@section('content')
<div class="container text-white">

    <h1>Create Characters</h1>
    <form action="{{ route('admin.characters.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invali

            @enderror" name="name" id="name" >

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="level">Level</label>
            <input type="text" class="form-control @error('level') is-invali

            @enderror" name="level" id="level" >

            @error('level')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="class">Class</label>
            <input type="text" class="form-control @error('class') is-invali

            @enderror" name="class" id="class" >

            @error('class')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="race">Race</label>
            <input type="text" class="form-control @error('race') is-invali

            @enderror" name="race" id="race" >

            @error('race')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="lifepoint">Lifepoint</label>
            <input type="text" class="form-control @error('lifepoint') is-invali

            @enderror" name="lifepoint" id="lifepoint" >

            @error('lifepoint')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="strength">Strength</label>
            <input type="text" class="form-control @error('strength') is-invali

            @enderror" name="strength" id="strength" >

            @error('strength')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="agility">Agility</label>
            <input type="text" class="form-control @error('agility') is-invali

            @enderror" name="agility" id="agility" >

            @error('agility')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="main_weapon">Main weapon</label>
            <input type="text" class="form-control @error('main_weapon') is-invali

@enderror" name="main_weapon" id="main_weapon" >

            @error('main_weapon')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
</div>
@endsection
