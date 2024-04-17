<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('conferences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'address' => 'required'
        ]);

        Conference::create($request->all());
        return redirect()->route('conferences.index');
    }

    public function show(Conference $conference)
    {
        return view('conferences.show', compact('conference'));
    }

    public function edit(Conference $conference)
    {
        return view('conferences.edit', compact('conference'));
    }

    public function update(Request $request, Conference $conference)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'address' => 'required'
        ]);

        $conference->update($request->all());
        return redirect()->route('conferences.index');
    }

    public function destroy(Conference $conference)
    {
        $conference->delete();
        return redirect()->route('conferences.index');
    }
}
