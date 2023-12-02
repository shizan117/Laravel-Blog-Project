<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use const http\Client\Curl\Versions\IDN;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private static $destroy;
    public function index()
    {
        return view('admin.event.index',[
            'events'=>Event::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Event::saveInfo($request);
        return redirect(route('events.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Event::showStatus($id);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.event.edit',[
            'event'=>Event::find($id)
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Event::saveInfo($request,$id);
        return redirect(route('events.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        self::$destroy= Event::find($id);
        self::$destroy->delete();
        return back();
    }
}
