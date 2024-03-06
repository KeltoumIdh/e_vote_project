<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Election;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Termwind\Components\Element;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidats = Candidate::paginate(10);
        return view('admin.candidat.index', compact('candidats'));
    }
    public function getallelections()
    {
        $elections = Election::all();
        return view('admin.candidat.add', compact('elections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'election_id' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/candidats')
                ->withErrors($validator)
                ->withInput();
        }

        $clients = new Candidate();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/candidats/', $filename);
            $clients->image = $filename;
        } else {
            $clients->image = 'default.jpg';
        }
        $clients->name = $request->input('name');
        $clients->election_id = $request->input('election_id');


        $clients->save();

        return redirect('/admin/candidats')->with('status', 'Candidat ajouter avec success');
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
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}