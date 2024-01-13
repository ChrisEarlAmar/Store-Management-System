<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Store;
use App\Models\Employee;



class StoreController extends Controller
{
    public function index()
    {
        // Fetch all stores
        $stores = Store::all();
        return view('stores.index', ['stores' => $stores]);
    }

    public function create()
    {
        return view('stores.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|email|unique:stores,email',
            'contact' => 'required|string|max:11',
        ]);

        $store = new Store();
        $store->name = $validatedData['name'];
        $store->address = $validatedData['address'];
        $store->email = $validatedData['email'];
        $store->contact = $validatedData['contact'];
        $store->save();

        return redirect()->route('stores.index')->with('success', 'Store created successfully.');
    }

    public function show($id)
    {
        $store = Store::find($id);

        // If store exits
        if ($store) {
            // Found
            return view('stores.show', ['store' => $store]);
        } else {
            // Not found
            return redirect()->route('stores.index')->with('error', 'Store not found.');
        }
    }

    public function edit($id)
    {
        $store = Store::find($id);
        
        // If store exits
        if ($store) {
            // Found
            return view('stores.edit', ['store' => $store]);
        } else {
            // Not found
            return redirect()->route('stores.index')->with('error', 'Store not found.');
        }
    }

    public function update(Request $request, $id)
    {

        $store = Store::find($id);

        if (!$store) {
            return redirect()->route('stores.index')->with('error', 'Store not found.');
        } 
    
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('stores')->ignore($store->id),
            ],
            'contact' => 'required|string|max:11',
        ]);
    
        $store->fill($validatedData)->save();
    
        return redirect()->route('stores.show', $store->id)->with('update', 'Store details updated successfully.');
    }    
    

    public function destroy($id)
    {    
        $store = Store::find($id);

        // If entry does not exist
        if (!$store) {
            return redirect()->route('stores.index')->with('error', 'Store not found.');
        }

        // Find employees associated with the store
        $employees = Employee::where('store_id', $id)->get();

        // Delete employees associated with the store
        foreach ($employees as $employee) {
            $employee->delete();
        }

        // Delete the entry
        $store->delete();

        return redirect()->route('stores.index')->with('delete', 'Store deleted successfully.');
    }
}