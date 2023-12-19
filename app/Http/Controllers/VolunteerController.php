<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public static $destroy;
    public function store(Request $request)
    {
        Volunteer::saveInfo($request);
        return redirect(route('home'))->with('success', 'Form submitted successfully!');
    }


    public function index()
    {
        return view('admin.about.volunteer.index',[
            'volunteers'=>Volunteer::all()
        ]);
    }
    public function volunteersDestroy($id)
    {
        self::$destroy = Volunteer::find($id);
        self::$destroy->delete();
        return back();
    }

    public function show(string $id)
    {
        Volunteer::showStatus($id);
        return back();
    }

}
