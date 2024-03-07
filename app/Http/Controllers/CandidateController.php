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
    public function getall($id)
    {
        $candidats = Candidate::where('election_id',$id)->get();
        return view('welcome', compact('candidats'));
    }
    public function index()
    {
        $candidats = Candidate::all();
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
            'election_id' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/candidats')
                ->withErrors($validator)
                ->withInput();
        }

        $candidats = new Candidate();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/candidats/', $filename);
            $candidats->image = $filename;
        } else {
            $candidats->image = 'default.jpg';
        }
        $candidats->name = $request->input('name');
        $candidats->election_id = $request->input('election_id');


        $candidats->save();

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

    public function edit($id)
    {
        $elections = Election::all();
        $candidat = Candidate::find($id);
        return view('admin.candidat.edit', compact(['candidat', 'elections']));
    }

    public function update(Request $request, $id)
    {
        $candidat = Candidate::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'election_id' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect("/candidats/edit/$id")
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('image')) {
            if ($candidat->image !== 'default.jpg') {
                $existingImagePath = public_path('assets/uploads/candidats/' . $candidat->image);
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }
            // Upload and save the new image
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/uploads/candidats/'), $filename);

            // Update the candidat's image
            $candidat->image = $filename;
        }
        $candidat->name = $request->input('name');
        $candidat->election_id = $request->input('election_id');
        $candidat->update();

        return redirect('/admin/candidats')->with('status', 'candidat modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $candidat = Candidate::find($id);
        if ($candidat->image !== 'default.jpg') {
            $path = 'assets/uploads/candidats/' . $candidat->image;
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $candidat->delete();
        return redirect('/admin/candidats')->with('status', 'candidat est supprimee avec succes');
    }
}