<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // DISPLAY ALL VISITS
    public function index()
    {
        $customers = Customer::latest()->get();
        return view('customers.index', compact('customers'));
    }

    // SHOW CREATE FORM
    public function create()
    {
        return view('customers.create');
    }

    // STORE NEW VISIT (TIME IN ONLY)
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'department' => 'required',
            'dob' => 'required|date',
            'reason' => 'required',
        ]);

        Customer::create([
            'student_id' => $request->student_id,
            'name' => $request->name,
            'gender' => $request->gender,
            'department' => $request->department,
            'dob' => $request->dob,
            'reason' => $request->reason,

            // ✅ AUTO TIME IN
            'time_in' => now(),

            // ❌ MUST BE NULL ON CREATE
            'time_out' => null,
        ]);

        return redirect()->route('customers.index')
            ->with('success', 'Visit recorded successfully!');
    }

    // EDIT FORM
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    // UPDATE VISIT (TIME OUT + INFO UPDATE)
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'student_id' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'department' => 'required',
            'dob' => 'required|date',
            'reason' => 'required',
        ]);

        $customer->update([
            'student_id' => $request->student_id,
            'name' => $request->name,
            'gender' => $request->gender,
            'department' => $request->department,
            'dob' => $request->dob,
            'reason' => $request->reason,

            // ✅ ONLY SET WHEN EDITING (EXIT CLINIC)
            'time_out' => $request->time_out,
        ]);

        return redirect()->route('customers.index')
            ->with('success', 'Visit updated successfully!');
    }

    // SHOW SINGLE RECORD
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    // DELETE RECORD
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')
            ->with('success', 'Visit deleted successfully!');
    }
}