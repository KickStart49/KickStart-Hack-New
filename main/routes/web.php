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


Route::get('/in/{username}', [
    'uses' => 'profilecontroller@user',
    'as' => 'profile'
]);


Route::get('/admin/forms', [
    'uses' => 'Admincontroller@formindex',
    'as'=>'admin.forms'
]);


Route::get('/admin/charts', [
    'uses' => 'Admincontroller@index',
    'as'=>'admin.charts'
]);

Route::get('/admin/create/user', [
    'uses' => 'Admincontroller@createuser',
    'as'=>'admin.create.user'
]);


Route::get('/admin/show/user', [
    'uses' => 'Usercontroller@showuser',
    'as'=>'admin.show.user'
]);
    Route::get('user/manager/{id}', [
    'uses' => 'Usercontroller@manager',
    'as'=>'user.manager'
]);

     Route::get('user/visitor/{id}', [
    'uses' => 'Usercontroller@visitor',
    'as'=>'user.visitor'
]);





Route::get('/again/login', function () {
    return view('auth.login.email');
});
Auth::routes(['verify' => true]);

Route::get('/signup', function () {
    return view('auth.register.register');
});

Route::get('/admin/tables', function () {
    return view('admin.tables');
});

Route::get('/login/psd', function () {
	if(Session::get('email')){
    	return view('auth.login.password');
    }
    else{
    	return redirect()->back();
    }
})->name('loginpsd');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth','emailverify']);

Route::get('/login/identifier',[
    'uses' => 'LoginAuthCheck@login',
	'as' => 'logindemo'
]);

Route::post('/login/success', [
	'uses' => 'LoginAuthCheck@loginsuccess',
	'as' => 'loginsuccess'
]);

Route::post('/login/identifier/emailverify' , [
	'uses' => 'LoginAuthCheck@email',
	'as' => 'verifyemail'
]);
Route::post('/login/psd/passwordverify' , [
	'uses' => 'LoginAuthCheck@password',
	'as' => 'verifypassword'
]);
Route::post('/login/psd/psdrequest' , [
	'uses' => 'LoginAuthCheck@passwordview',
	'as' => 'requestpassword'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
