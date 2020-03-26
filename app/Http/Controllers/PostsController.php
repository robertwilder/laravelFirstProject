<?php

namespace App\Http\Controllers;


class PostsController

{
    public function show($slug)


    {

        $post = \DB::table('posts')->where('slug', $slug)->first();

        
        return view('posts', [
            'post' => $post
            ]);
            
            
        }
        
        
        
        
    }
    
    
    
    // dd($post);
    // Route::get('/', function () {
        //     return view('welcome');
        // });
        
        // Route::get('test', function () {
            //     $name = request('name');
            //     return view('test', [
                //         'name' => $name
                //         // any key in this array will be available in the view 
                //     ]);
                // });
                
                
                
                // $posts = [
                    //     'my-first-post' => 'day one of the lockdown',
                    //     'my-second-post' => 'Arghrrrrrr lonleyness'
                    // ];
                    
                    // if (! array_key_exists($post, $posts)) {
                    //     abort(404, 'sorry, that post is not found');
                    //     // if something that is typed that is not recognized then it will revert to the laravel abort function 
                    // }
                    