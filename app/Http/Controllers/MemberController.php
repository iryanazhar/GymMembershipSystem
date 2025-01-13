<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
     // Display all members
     public function index()
     {
         $members = Member::all(); // Temporarily fetch members without package details
         return view('members.list', compact('members'));
     }

     // create member form
    public function create()
    {
        $members = Member::all();
        return view('members.create', compact('members')); // Use this for now as there's no packages yet
    }

    // Store a new member
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|string|unique:members,id',
            'name' => 'required|string|max:255',
            'contact_information' => 'required|string|max:255',
            'membership_package_id' => 'required|string|in:basic,pro,student,daily_accesss',
            'gender' => 'required|string|in:male,female',
            'join_date' => 'required|date',
            'status' => 'required|string|in:active,inactive',
        ]);

        Member::create($request->all());
        return redirect()->route('members.index')->with('success', 'Member added successfully!');
    }

    // Edit member details
    public function edit($id)
    {
        $member = Member::findOrFail($id);

        // pass member to the view
        return view('members.edit', compact('member'));
    }

    // Update member details
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'id' => 'required|string|unique:members,id,' . $id,  // Allow current id to be excluded from uniqueness check
            'name' => 'required|string|max:255',
            'contact_information' => 'required|string|max:255',
            'membership_package_id' => 'required|string|in:basic,pro,student,daily_access',
            'gender' => 'required|string|in:male,female',
            'join_date' => 'required|date',
            'status' => 'required|string|in:active,inactive',
        ]);

        $member = Member::findOrFail($id);
        $member->update($request->all());
        $member->save();

        return redirect()->route('members.index')->with('success', 'Member updated successfully!');

    }

    // Delete a member
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete(); //delete member
        return redirect()->route('members.index')->with('success', 'Member deleted successfully!');
    }
}
