@extends('layouts.app')

@section('content')
    <h1 class=" text-center text-white text-uppercase p-4">Characters Cards</h1>
    <div class="container">
        <div class="text-center m-5">
            <h1 class="text-white">Aggiungiti al team di CREATORS</h1>
            <a class="btn btn-success" href="{{ route('admin.characters.create') }}">Crea nuovo characters</a>
        </div>
        <div class="row">
            @foreach ($characters as $character)
                <div class="card text-bg-primary mb-3 col-4 shadow">
                    <div class="card-header">
                        <h4 class="fs-4 card-title fw-bold text-center text-capitalize py-2">{{ $character->name }}</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $character->level }} lv.</p>
                        <p class="card-text">race: {{ $character->race }}</p>
                        <p class="card-text">class: {{ $character->class }}</p>
                        <p class="card-text">lifepoint: {{ $character->lifepoint }}</p>
                        <p class="card-text">{{ $character->strength }} <i class="fa-solid fa-dumbbell"></i></p>
                        <p class="card-text">{{ $character->agility }} <i class="fa-solid fa-person-running"></i></p>
                        <p class="card-text">weapon: {{ $character->main_weapon }}</p>

                        <div class="d-flex justify-content-between align-items-center">
                            <a class="m-1" href="{{ route('admin.characters.show', $character->id) }}"><button
                                    class="btn btn-warning"> Show</button></a>

                            <form action="{{ route('admin.characters.destroy', $character->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-1" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
