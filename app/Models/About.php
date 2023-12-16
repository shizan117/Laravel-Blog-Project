<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    public static $about, $image, $imgNewName, $dir, $imgUrl;

    public static function saveInfo($request, $id = null)
    {
        if ($id != null) {
            self::$about = About::find($id);
        } else
            self::$about = new About();

        self::$about->title = $request->title;
        self::$about->content = $request->content;

        if ($request->file('background_image')) {
            if (self::$about->background_image) {
                if (file_exists(self::$about->background_image)) {
                    unlink(self::$about->background_image);
                }
            }
            self::$about->background_image = self::saveImage($request, 'background_image');
        }

        if ($request->file('about_image')) {
            if (self::$about->about_image) {
                if (file_exists(self::$about->about_image)) {
                    unlink(self::$about->about_image);
                }
            }
            self::$about->about_image = self::saveImage($request, 'about_image');
        }

        self::$about->volunteer_google_form= $request->volunteer_google_form;

        self::$about->save();
    }

    public static function saveImage($request, $imageName)
    {
        self::$image = $request->file($imageName);
        self::$imgNewName = rand() . '.' . self::$image->extension();
        self::$dir = 'admin-assets/img/about-image/';
        self::$imgUrl = self::$dir . self::$imgNewName;
        self::$image->move(self::$dir, self::$imgNewName);
        return self::$imgUrl;
    }
}
