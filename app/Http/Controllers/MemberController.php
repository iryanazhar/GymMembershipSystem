<?php

namespace App\Http\Controllers;

use App\Models\Member;
//use App\Models\MembershipPackage; //nti tukar nama MembershipPackage to updated Model name
use Illuminate\Http\Request;

class MemberController extends Controller
{
     // Display all members
     public function index()
     {
        //$members = Member::with('membershipPackage')->get();
         $members = Member::all(); // Temporarily fetch members without package details
         return view('members.list', compact('members'));
     }

     // create member form
    public function create()
    {
        //$packages = MembershipPackage::all(); //nti tukar nama MembershipPackage to updated Model name
        //return view('members.create', compact('packages'));
        $members = Member::all();
        return view('members.create', compact('members')); // Use this for now as there's no packages yet
    }

    // Store a new member
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'id' => 'required|string|unique:members,id',
            'name' => 'required|string|max:255',
            'contact_information' => 'required|string|max:255',
            // temporarily accept membership_package_id as nullable
            'membership_package_id' => 'required|string|in:basic,pro,student,daily_accesss', //later ganti nullable dgn required
            // 'membership_package_id' => 'required|string|ikut atas|exists:membership_packages,id', // 'id', pls refer to the membership_packages' Primary key column name
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
        //$members = Member::all();
        $member = Member::findOrFail($id);
        //$packages = MembershipPackage::all();
        //return view('members.edit', compact('member', 'packages'));

        // pass member to the view
        return view('members.edit', compact('member')); // Edit without package dependency
        // later delete and reuse yg atas after package ada
    }

    // Update member details
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|string|unique:members,id'. $id,  // No $id needed for store
            'name' => 'required|string|max:255',
            'contact_information' => 'required|string|max:255',
            // Temporarily accept 'membership_package_id' as nullable
            'membership_package_id' => 'required|string|in:basic,pro,student,daily_access',  // later change to required
             // 'membership_package_id' => 'required|string|ikut atas|exists:membership_packages,id', // 'id', pls refer to the membership_packages' Primary key column name
            'gender' => 'required|string|in:male,female',
            'join_date' => 'required|date',
            'status' => 'required|string|in:active,inactive',
        ]);

        $member = Member::findOrFail($id);
        $member->update($request->all());

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
