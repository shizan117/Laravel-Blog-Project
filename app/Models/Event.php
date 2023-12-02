<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    private static $event,$image, $imageNewName,$dir, $imgUrl, $status;

    public static function saveInfo($request,$id=null){
        if ($id!=null)
        {
            self::$event= Event::find($id);
        }
        else
            self::$event=new Event();

        self::$event->title=$request->title;
        self::$event->datetime=$request->datetime;
        self::$event->location=$request->location;
        self::$event->description=$request->description;
        if ($request->file('image')){
            if (self::$event->image){
                if (file_exists(self::$event->image)){
                    unlink(self::$event->image);
                }
            }
            self::$event->image= self::saveImage($request);
        }
        self::$event->save();
    }

    public static function saveImage($request){
        self::$image=$request->file('image');
        self::$imageNewName = rand().'.'.self::$image->extension();
        self::$dir ='admin-assets/img/event-image/';
        self::$imgUrl=self::$dir.self::$imageNewName;
        self::$image->move(self::$dir,self::$imageNewName);
        return self::$imgUrl;

    }


    public static function showStatus($id){
        self::$status= Event::find($id);
        if(self::$status->status==1)
            self::$status->status=0;
        else
            self::$status->status=1;

        self::$status->save();

    }
}
