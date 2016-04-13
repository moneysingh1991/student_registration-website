<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'SiteController@index');
Route::post('login', 'SiteController@login');
Route::post('logout', 'SiteController@logout');

Route::get('students/academics', 'StudentsController@academics');
Route::resource('students', 'StudentsController');
Route::resource('professors', 'ProfessorsController');
Route::get('courses/enroll', 'CoursesController@enroll');
Route::get('courses/plan', 'CoursesController@plan');
Route::resource('courses', 'CoursesController');

/*
 * Temporary Routes
 */
Route::get('cecilia', 'SiteController@cecilia');
Route::get('maninderpal', 'SiteController@maninderpal');
