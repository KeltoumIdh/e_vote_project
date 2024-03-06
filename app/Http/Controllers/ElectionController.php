<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Illuminate\Http\Request;
use Termwind\Components\Element;
use Illuminate\Support\Facades\Validator;

class ElectionController extends Controller
{
    public function getall()
    {
        $elections = Election::all();
        return view('welcome', compact('elections'));
    }
    public function index()
    {
        $elections = Election::all();
        return view('admin.elections.index', compact('elections'));
    }
    public function getallelections()
    {
        $elections = Election::all();
        return view('admin.elections.add', compact('elections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'start' => 'nullable|date',
            'end' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/elections')
                ->withErrors($validator)
                ->withInput();
        }

        $elections = new Election();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/elections/', $filename);
            $elections->image = $filename;
        } else {
            $elections->image = 'default.jpg';
        }
        $elections->name = $request->input('name');
        $elections->start = $request->input('start');
        $elections->end = $request->input('end');
        $elections->save();

        return redirect('/admin/elections')->with('status', 'election ajouter avec success');
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
    public function show(Election $electione)
    {
        //
    }

    public function edit($id)
    {
        $elections = Election::all();
        $election = Election::find($id);
        return view('admin.elections.edit', compact(['election', 'elections']));
    }

    public function update(Request $request, $id)
    {
        $election = Election::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'start' => 'nullable|date',
            'end' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect("/elections/edit/$id")
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('image')) {
            if ($election->image !== 'default.jpg') {
                $existingImagePath = public_path('assets/uploads/elections/' . $election->image);
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }
            // Upload and save the new image
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/uploads/elections/'), $filename);

            // Update the election's image
            $election->image = $filename;
        }
        $election->name = $request->input('name');
        $election->start = $request->input('start');
        $election->end = $request->input('end');
        $election->update();

        return redirect('/admin/elections')->with('status', 'election modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $election = Election::find($id);

        if ($election) {
            // Construct the full path to the image
            $path = public_path('assets/uploads/elections/' . $election->image);

            // Check if the path is a file and exists before attempting to unlink
            if (is_file($path) && file_exists($path)) {
                unlink($path);
            }

            // Delete the election
            $election->delete();

            return redirect('/admin/elections')->with('status', 'Election supprimée avec succès');
        } else {
            return redirect('/admin/elections')->with('status', 'Élection non trouvée');
        }
    }
}