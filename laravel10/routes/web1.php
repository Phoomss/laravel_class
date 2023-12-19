<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('findname');
});


Route::get('/about', function () {
    return view('about');
});

// Route::get('/findname', function () {
//     $data['name'] = 'นรงศ์ศักดิ์';
//     return view('findname', $data);
// });

// แบบระบบ id ส่ง params
Route::get('/blog/{id}', function ($id) {
    return "<h1>Page Blog : ${id}</h1";
});

// แบบ ไม่บังคับใส่ params
Route::get('/blog/{id?}', function ($id = null) {
    return "<h1>Page Blog : ${id}</h1";
});

// Route::get("user/{id}/{name}", function ($id, $name) {
//     return "A Student code: " . $id . "<br>" . "Student name is: " . $name;
// });

// เช็คเป็นตัวเลขเท่านั้น ->where('params','[0-9]+') เช็คเป็นตัวอักษร(ภาษาอังกฤษ)เท่านั้น ->where('params','[A-Za-z]+')
// Route::get("/user/{id}/{name}", function ($id, $name) {
//     return "A Student code: " . $id . "<br>" . "Student name is: " . $name;
// })->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

Route::get("/about/profile/{id?}/{name?}", function ($id = null, $name = null) {
    return "A Student code: " . $id . "<br>" . "Student name is: " . $name;
})->name('profile');

// Route::get('user/profile', function () {
//     return "User/Profile";
// })->name('profile');

// group route
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "dashboard";
    });
    Route::get('/backend', function () {
        return 'backend';
    });
    Route::get('/api', function () {
        return 'api';
    });
});


/*--------------------Method Post--------------------------*/
Route::post('/store', function (Request $request) {
    dd($request->all());
});
