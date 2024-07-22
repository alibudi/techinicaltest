<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        $packages = Package::all();
        return view('admin.package.index',compact('packages'));
    }
    public function store(Request $request)
    {
        $package = Package::create($request->all());
        return response()->json($package);
    }

    public function show($id)
    {
        $package = Package::find($id);
        return response()->json($package);
    }

    public function update(Request $request, $id)
    {
        $package = Package::find($id);
        $package->update($request->all());
        return response()->json($package);
    }

    public function destroy($id)
    {
        Package::destroy($id);
        return response()->json(['success' => 'Package deleted successfully']);
    }
}
