<?php

namespace App\Http\Controllers\Admin;

use App\Models\Character;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Http\Controllers\Controller;
use App\Models\Weapon;
use App\Models\Type;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {

        $characters = Character::with('type')->get();

        return view('admin.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $types = Type::all();
        $weapons = Weapon::all();

        return view('admin.characters.create', compact('types', 'weapons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCharacterRequest  $request
     */
    public function store(StoreCharacterRequest $request)
    {
        $form_data = $request->validated();
        $newCharacter = Character::create($form_data);
        if ($request->has('weapons')) {
            $newCharacter->weapons()->attach($request->weapons);
        }
        return redirect()->route('admin.characters.show', $newCharacter->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     */
    public function show(Character $character)
    {
        return view('admin.characters.show', compact('character'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $character
     */
    public function edit(Character $character)
    {
        $types = Type::all();
        $weapons = Weapon::all();

        return view('admin.characters.edit', compact('character', 'types', 'weapons'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterRequest  $request
     * @param  \App\Models\Character  $character
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $form_data = $request->validated();
        $character->update($form_data);
        if ($request->has('weapons')) {
            $character->weapons()->sync($request->weapons);
        } else {
            $character->weapons()->sync([]);
        }
        return redirect()->route('admin.characters.show', $character->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('admin.characters.index')->with('message', "$character->name deleted.");
    }
}