<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\HttpKernel\HttpCache\save;

class Category extends Model
{
    use HasFactory;

    public static $category,$status;
    public static function saveInfo($request,$id=null){
        if ($id != null)
        {
            self::$category = Category::find($id);
        }
        else
            self::$category= new Category();

        self::$category->category_name =$request->category_name;
        self::$category->save();
    }

    public static function showStatus($id){
        self::$status= Category::find($id);
       if(self::$status->status == 1){
           self::$status->status =0;
       }
       else {
           self::$status->status = 1;
       }
       self::$status->save();
    }

}
