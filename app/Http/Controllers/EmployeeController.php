<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Store;
use App\Models\Employee;
use App\Models\Position;



class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('position')->get();
        $positions = Position::all();
        return view('employees.index', ['employees' => $employees, 'positions' => $positions]);
    }
    

    public function create()
    {
        $stores = Store::pluck('name', 'id');
        $positions = Position::pluck('name', 'id');
        return view('employees.create', compact('stores', 'positions'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'store_id' => 'required|exists:stores,id',
            'position_id' => 'required|exists:positions,id',
            'email' => 'required|email|unique:employees,email',
            'contact' => 'required|string|max:11',
        ]);
    
        $employee = new Employee();
        $employee->name = $validatedData['name'];
        $employee->address = $validatedData['address'];
        $employee->store_id = $validatedData['store_id'];
        $employee->position_id = $validatedData['position_id'];
        $employee->email = $validatedData['email'];
        $employee->contact = $validatedData['contact'];
        $employee->save();
    
        return redirect()->route('employees.index')->with('success', 'Employee entry added successfully.');
    }
    

    public function show($id)
    {
        $employee = Employee::with('store')->find($id);

        if (!$employee) {
            return redirect()->route('employees.index')->with('error', 'Employee entry not found.');
        }

        return view('employees.show', ['employee' => $employee]);
    }

    public function edit($id)
    {
        $stores = Store::pluck('name', 'id');
        $positions = Position::pluck('name', 'id');


        $employee = Employee::find($id);

        if (!$employee) {
            return redirect()->route('employees.index')->with('error', 'Employee entry not found.');
        }

        return view('employees.edit', ['employee' => $employee, 'stores' => $stores, 'positions' => $positions]);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
    
        if (!$employee) {
            return redirect()->route('employees.index')->with('error', 'Employee entry not found.');
        }
    
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'store_id' => 'required|exists:stores,id',
            'position_id' => 'required|exists:positions,id',
            'address' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('employees')->ignore($employee->id),
            ],
            'contact' => 'required|string|max:11',
        ]);
    
        $employee->fill($validatedData)->save();
    
        return redirect()->route('employees.show', $employee->id)->with('update', 'Employee details updated successfully.');
    }    

    public function destroy($id)
    {    

        $employee = Employee::find($id);

        if (!$employee) {
            return redirect()->route('employees.index')->with('error', 'Employee entry not found.');
        }

        $employee->delete();

        return redirect()->route('employees.index')->with('delete', 'Employee entry deleted successfully.');
    }
}
