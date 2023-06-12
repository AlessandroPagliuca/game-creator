@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="container">
            <h2 class="fs-4 text-dark py-5">
                {{ __('Dashboard') }}
            </h2>
            <div class="row justify-content-center">
                <div class="col">
                    <span class="btn btn-primary p-2">
                        <a class="text-light text-uppercase fw-semibold" href="{{ route('admin.characters.index') }}"
                            style="text-decoration: none;">Go to
                            characters</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
