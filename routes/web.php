<?php

// use Symfony\Component\Routing\Route;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/action', function () {
    return view('pages.action');
});
Route::get('/hello', function () {
    return "hello world";
});

Route::get('/student/{id}', function($id) {
    return "Hello Student ".$id . "web 2020A";
}) ->name('show.student');


// create new route
Route::get('/teacher/{index}',function($index){
    // create new array
    $teachers = array("Channak","Ronan","Shieha","Rady","Rith");
    $returnResult = "";
    $size = sizeof($teachers);
    if($index < $size){
        $returnResult = "This teacher is : " . $teachers[$index];
    }else{
        $returnResult = "This array is : \n";
        $item = "";
        $countIndex = $size -1;
        for($i= 0 ; $i < $size; $i++){
            $item .= "[$i] " .$teachers[$i];
            if($i < $countIndex){
                $item .= ", ";
            }
        }
        $returnResult .= $item;
        $returnResult .= "<br> No Teacher with this index: " .$index."<br> The largest index is : ". $countIndex;
    }
    return  $returnResult;
    });

    Route::get('action','PagesController@action');
    Route::get('about','PagesController@about');
    Route::get('join','PagesController@join');
    Route::get('news','PagesController@news');
    Route::get('contact','PagesController@contact');
    // Route::get('showCustomer', 'PagesController@showCustomer');
    Route::get('customer', 'PagesController@listCustomer');
    