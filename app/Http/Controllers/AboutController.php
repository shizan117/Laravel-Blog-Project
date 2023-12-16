<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static $destroy;
    public function index()
    {
        return view('admin.about.index',[
            'abouts'=>About::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'title' => 'required|string|max:255',
//            'content' => 'required|string',
//            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'about_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);

        About::saveInfo($request);
        return redirect(route('abouts.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.about.edit',
        [
            'about'=>About::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        About::saveInfo($request,$id);
        return redirect(route('abouts.index'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        self::$destroy= About::find($id);
        self::$destroy->delete();
        return back();
    }
}
