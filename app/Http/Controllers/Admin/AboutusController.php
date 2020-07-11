<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Abouts;

class AboutusController extends Controller
{
    public function index()
    {
        return view('admin.abouts');
    }

    public function store(Request $request)
    {
        $aboutus = new Abouts;

        $aboutus->title = $request->input('title');
        $aboutus->subtitle = $request->input('subtitle');
        $aboutus->description  = $request->input('description');

        $aboutus->save();
        return redirect('/abouts')->with('success', 'Data Added for About Us!');
    }
}
