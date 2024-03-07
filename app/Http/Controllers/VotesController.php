<?php

namespace App\Http\Controllers;

use App\Models\Votes;
use Illuminate\Http\Request;

class VotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function checkPassword(Request $request)
    {
        // Replace 'correctPassword' with your actual correct password
        $correctPassword = '12345678';

        $enteredPassword = $request->input('password');

        if ($enteredPassword === $correctPassword) {
            // Password is correct
            return response()->json(['status' => 'success']);
        } else {
            // Password is incorrect
            return response()->json(['status' => 'error', 'message' => 'Mot de passe incorrect. Veuillez réessayer.'], 401);
        }
    }
    public function addVote(Request $request)
    {
        // Retrieve data from the AJAX request
        $voterId = $request->input('voter_id');
        $electionId = $request->input('election_id');
        $candidId = $request->input('candid_id');
        $votedAt = $request->input('voted_at');

        // Create a new Vote model instance and save it to the database
        $vote = new Votes([
            'voter_id' => $voterId,
            'election_id' => $electionId,
            'candid_id' => $candidId,
            'voted_at' => $votedAt,
        ]);

        try {
            $vote->save();

            // Return a success response
            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            // Return an error response if there's an issue with saving the vote
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Votes $votes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Votes $votes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Votes $votes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Votes $votes)
    {
        //
    }
}