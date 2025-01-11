<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\Trainer;
use Illuminate\Http\Request;

class ClassController extends Controller
{
   // Show the list of classes
   public function index()
   {
       $classes = Classes::with('trainer')->get();  // Eager load trainer for each class
       return view('classes.list', compact('classes'));
   }

   // Show the form for creating a new class
   public function create()
   {
       $trainers = Trainer::all();  // Get all trainers for the dropdown
       return view('classes.create', compact('trainers'));
   }

   // Store a newly created class in the database
   public function store(Request $request)
   {
       $request->validate([
           'classcode' => 'required|unique:classes',
           'name' => 'required',
           'time' => 'required',
           'duration' => 'required|numeric',
           'capacity' => 'required|numeric',
           'trainer_id' => 'required|exists:trainers,id',
           'description' => 'nullable|string',
       ]);

       Classes::create($request->all());

       return redirect()->route('classes.index')->with('success', 'Class created successfully.');
   }

   // Show the form for editing the specified class
   public function edit($id)
   {
       $class = Classes::findOrFail($id);
       $trainers = Trainer::all();  // Get all trainers for the dropdown
       return view('classes.edit', compact('class', 'trainers'));
   }

   // Update the specified class in the database
   public function update(Request $request, $id)
   {
       $request->validate([
           'classcode' => 'required|unique:classes,classcode,' . $id,
           'name' => 'required',
           'time' => 'required',
           'duration' => 'required|numeric',
           'capacity' => 'required|numeric',
           'trainer_id' => 'required|exists:trainers,id',
           'description' => 'nullable|string',
       ]);

       $class = Classes::findOrFail($id);
       $class->update($request->all());

       return redirect()->route('classes.index')->with('success', 'Class updated successfully.');
   }

   // Remove the specified class from the database
   public function destroy($id)
   {
       $class = Classes::findOrFail($id);
       $class->delete();

       return redirect()->route('classes.index')->with('success', 'Class deleted successfully.');
   }
}
