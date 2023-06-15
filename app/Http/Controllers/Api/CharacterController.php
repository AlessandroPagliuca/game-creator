<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{

    public function index()
    {
        $characters = Character::with('type')->paginate(5);
        return response()->json([
            'status' => 'success',
            'message' => 'ok',
            'results' => $characters
        ], 200);
    }

    public function show($slug)
    {
        $character = Character::with('type', 'weapons')->where('slug', $slug)->first();

        if ($character) {
            return response()->json([
                'status' => 'success',
                'message' => 'ok',
                'results' => $character
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'character not found !'
            ], 404);
        }


    }
}