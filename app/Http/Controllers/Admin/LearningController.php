<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Learning;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function index()
    {
        $learnings = Learning::all();
        return view('admin.learning.index',compact('learnings'));
    }
    public function store(Request $request)
    {
        $learnig = Learning::create($request->all());
        return response()->json($learnig);
    }

    public function show($id)
    {
        $learnig = Learning::find($id);
        return response()->json($learnig);
    }

    public function update(Request $request, $id)
    {
        $learnig = Learning::find($id);
        $learnig->update($request->all());
        return response()->json($learnig);
    }

    public function destroy($id)
    {
        Learning::destroy($id);
        return response()->json(['success' => 'Package deleted successfully']);
    }
}
