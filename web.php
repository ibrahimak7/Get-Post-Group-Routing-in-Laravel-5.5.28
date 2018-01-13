<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function ()
{
    return view('home');
})->name('home');

Route::group(['prefix'=>'pages'],function () // route as grouped & prefix the word for use every page http://127.0.0.1:8000/pages/page_name.
{
    // get route
    Route::get('/contact/{name?}', function ($name = null)  // it is route for link and it can recieve parameter or by defualt null
    {
        // url will look like http://127.0.0.1:8000/pages/contact
        return view('actions.contact',['name'=>$name]); // route direct user to contact page and along with parameter.
    })->name('contact'); // this is route name by which it can access

    Route::get('/address', function () // url will look like http://127.0.0.1:8000/pages/address
    {
        return view('actions.address');
    })->name('address');

    Route::get('/team', function () // url will look like http://127.0.0.1:8000/pages/team
    {
        return view('actions.team');
    })->name('team');

    Route::post('/',function (\Illuminate\Http\Request $request) // it recieve Request object from the form. Request class is in the directory.
    {
        // this is post route
        //url will look like http://127.0.0.1:8000/pages
        if (isset($request['action']) && $request['name']) // Checking if inputs are set.
        {
            if (strlen($request['name']) > 0) // checking if not empty.
            {
                return view('actions.nice',['action'=>$request['action'],'name'=>$request['name']]);
            }
            return redirect()->back(); // if not set then redirect back from where it came.

        }
        return redirect()->back(); // if not set then redirect back from where it came.

    })->name('benice');
});

