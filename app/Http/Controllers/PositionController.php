<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;


class PositionController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:positions',
        ]);

        $position = new Position();
        $position->name = $validatedData['name'];

        $position->save();

        return redirect()->route('employees.index')->with('open_modal_success', 'Position created successfully.');
    }

    public function destroy($id)
    {    
        $position = Position::find($id);
    
        // If position does not exist
        if (!$position) {
            return redirect()->route('employees.index')->with('open_modal_error', 'Position entry not found.');
        }
    
        // Check if employees are associated with this position, if true then prevent deletion.
        if ($position->employees()->exists()) {
            return redirect()->route('employees.index')->with('open_modal_error', 'Cannot delete position because it is associated with one or more employees.');
        }
    
        $position->delete();
    
        return redirect()->route('employees.index')->with('open_modal_delete', 'Position entry deleted successfully.');
    }
    
}
