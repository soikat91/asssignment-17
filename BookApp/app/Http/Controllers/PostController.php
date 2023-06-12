<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{      
   

// 2

   public function excerptDescription()
   {
       $posts = DB::table('posts')
           ->select('excerpt', 'description')
           ->get();
        
       return $posts;
   }

//    3
   public function distinctSelectMethod()
   {
       $posts = DB::table('posts')->select('min_to_read')->distinct()->get();
       return $posts;
   }

// 4
   public function retriveFristData ()
   {
       $posts = DB::table('posts')
           ->where('id', 2)
           ->first();
       return $posts->description;
   }

// 5
   public function description()
   {
       $posts = DB::table('posts')
           ->where('id', 2)
           ->value('description');
       return $posts;
   }


// 7
   public function titleColumn()
   {
       $posts = DB::table('posts')
           ->pluck('title');

       return $posts;
   }

// 8
   public function insertData()
   {

       $posts = DB::table('posts')->insert([
           'title' => 'X',
           'slug' => 'X',
           'excerpt' => 'excerpt',
           'description' => 'description',
           'is_published' => true,
           'min_to_read' => 3,
       ]);
       return $posts;
   }


//9
   public function update()
   {
       $update = DB::table('posts')
           ->where('id',  2)
           ->update([
               'excerpt'    => 'Laravel 10',
               'description' => 'Laravel 10',
           ]);
       return $update;
   }

//    10
   public function delete()
   {
       $delete = DB::table('posts')
           ->where('id', 3)
           ->delete();
       return $delete;
   }


   //14

   public function minReadData()
   {
       $posts = DB::table('posts')->whereBetween('min_to_read', [1, 5])->get();
       return $posts;
   }

   //15
   public function incrementByOne()
   {
       $posts = DB::table('posts')
           ->where('id', 3)
           ->increment('min_to_read');
       return $posts;
   }
}
