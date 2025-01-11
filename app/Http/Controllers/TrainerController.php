<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    // Show the list of trainers
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.list', compact('trainers'));
    }

    // Show the form for creating a new trainer
    public function create()
    {
        return view('trainers.create');
    }

    // Store a newly created trainer in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'expertise' => 'required|string|max:255',
            'availability' => 'required|string|max:255',
        ]);

        Trainer::create($request->all());

        return redirect()->route('trainers.index')->with('success', 'Trainer created successfully.');
    }

    // Show the form for editing the specified trainer
    public function edit($id)
    {
        $trainer = Trainer::findOrFail($id);
        return view('trainers.edit', compact('trainer'));
    }

    // Update the specified trainer in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'expertise' => 'required|string|max:255',
            'availability' => 'required|string|max:255',
        ]);

        $trainer = Trainer::findOrFail($id);
        $trainer->update($request->all());

        return redirect()->route('trainers.index')->with('success', 'Trainer updated successfully.');
    }

    // Remove the specified trainer from the database
    public function destroy($id)
    {
        $trainer = Trainer::findOrFail($id);
        $trainer->delete();

        return redirect()->route('trainers.index')->with('success', 'Trainer deleted successfully.');
    }
}
