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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/regular', 'DemoController@demo');
// Route::post('/regular', 'DemoController@regular');
// Route::get('view/{post?}', function (App\Post $post) {
//     return view('post.view', ['post' => $post]);
// });
// Route::get('view/{id?}', function ($id = 0) {
//     $user = App\User::find($id);
//     if (!$user) {
//         return abort('404');
//     }
//     return view('users.view', ['user' => $user]);
// });

// Route::get('examples/{example}', function ($example) {
//     return 'The example id is ' . $example . '.';
// })->where('example', '\d+');

// Route::get('posts/{post}', function ($post) {
//     return view('post.view', ['post' => $post]);
// });
Route::resource('post', 'PostController')->middleware('checkLogin');
Route::get('login', 'TestLoginController@index');
Route::post('login', 'TestLoginController@login');
Route::get('logout', 'TestLoginController@logout');
