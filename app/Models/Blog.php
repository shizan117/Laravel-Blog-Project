<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public static $blog,$status, $image, $imageNewName,$dir, $imgUrl;
    public static function saveInfo($request,$id=null){

        if ($id!=null){
            self::$blog = Blog::find($id);
        }
        else
            self::$blog = new Blog();


        self::$blog->title= $request->title;
        self::$blog->category_id= $request->category_id;
        self::$blog->author_name= $request->author_name;
        self::$blog->description= $request->description;
        self::$blog->date= $request->date;

        if ($request->file('image')){
            if (self::$blog->image){
                if (file_exists(self::$blog->image)){
                    unlink(self::$blog->image);
                }
            }
            self::$blog->image= self::saveImage($request);
        }
        self::$blog->save();
    }
    public static function saveImage($request){
        self::$image=$request->file('image');
        self::$imageNewName = rand().'.'.self::$image->extension();
        self::$dir ='admin-assets/img/blog-image/';
        self::$imgUrl=self::$dir.self::$imageNewName;
        self::$image->move(self::$dir,self::$imageNewName);
        return self::$imgUrl;

    }


    public static function showStatus($id){
self::$status= Blog::find($id);
if(self::$status->status==1)
    self::$status->status=0;
else
    self::$status->status=1;

self::$status->save();

    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
