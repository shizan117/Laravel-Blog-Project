<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;


    public static $volunteer,$status;
    public static function saveInfo($request){
        self::$volunteer= new Volunteer();

        self::$volunteer->name = $request->name;
        self::$volunteer->address = $request->address;
        self::$volunteer->email = $request->email;
        self::$volunteer->phone_number = $request->phone_number;
        self::$volunteer->gender = $request->gender;
        self::$volunteer->date_of_birth = $request->date_of_birth;
        self::$volunteer->profession = $request->profession;
        self::$volunteer->education = $request->education;
        self::$volunteer->last_educational_institution = $request->last_educational_institution;
        self::$volunteer->blood_group = $request->blood_group;
        self::$volunteer->skills = $request->skills;


        self::$volunteer->save();
    }
    public static function showStatus($id)
    {
        self::$status = Volunteer::find($id);
        if (self::$status->status == 1) {
            self::$status->status = 0;
        } else {
            self::$status->status = 1;
        }

        self::$status->save();
    }

}
