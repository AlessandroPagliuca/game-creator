@extends('layouts.app')

@section('content')
    <div class="bg-team">
        <h1 class=" text-center text-white text-uppercase p-4">Characters Cards</h1>
        <div class="container">
            <div class="text-center m-5">
                <a class="btn btn-success" href="{{ route('admin.characters.create') }}">Crea nuovo characters</a>
            </div>
            <div class="row">
                @foreach ($characters as $character)
                    <div class="col-4">
                        <div class="card card-bg mb-3 shadow">
                            <div class="row align-items-center">
                                <div class="col-10">
                                    <h4 class="fs-4 card-title fw-bold text-center text-capitalize py-2">
                                        {{ $character->name }}</h4>
                                </div>
                                <div class="col-2">
                                    <p class="card-text text-small fw-bold">{{ $character->level }} lv.</p>
                                </div>

                            </div>
                            <div class="card-body">

                                <p class="card-text"><span class="fw-bold text-capitalize">race:</span>
                                    {{ $character->race }}</p>
                                <p class="card-text"><span class="fw-bold text-capitalize">class:</span>
                                    {{ $character->class }}</p>
                                <p class="card-text"><span class="fw-bold text-capitalize">lifepoint:</span>
                                    {{ $character->lifepoint }}</p>
                                <p class="card-text"><i class="fa-solid fa-dumbbell"></i>: {{ $character->strength }} </p>
                                <p class="card-text"><i class="fa-solid fa-person-running"></i>: {{ $character->agility }}
                                </p>
                                <p class="card-text"><span class="fw-bold text-capitalize">weapon:</span>
                                    {{ $character->main_weapon }}</p>


                                <p>{{ $character->type ? $character->type->name : 'No type' }}</p>

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
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
