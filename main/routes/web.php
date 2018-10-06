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

Route::prefix('login')->group(function () {
    
    Route::get('psd', function () {
        if(Session::get('email')){
            return view('auth.login.password');
        }
        else{
            return redirect()->back();
        }
    })->name('loginpsd');
    Route::get('identifier',[
        'uses' => 'LoginAuthCheck@login',
        'as' => 'logindemo'
    ]);
     Route::post('/code/verification', [
     'uses' => 'Admincontroller@verification',
     'as'=>'code.verification'
        ]);

    Route::post('success', [
        'uses' => 'LoginAuthCheck@loginsuccess',
        'as' => 'loginsuccess'
    ]);

    Route::post('identifier/emailverify' , [
        'uses' => 'LoginAuthCheck@email',
        'as' => 'verifyemail'
    ]);
    Route::post('psd/passwordverify' , [
        'uses' => 'LoginAuthCheck@password',
        'as' => 'verifypassword'
    ]);
    Route::post('psd/psdrequest' , [
        'uses' => 'LoginAuthCheck@passwordview',
        'as' => 'requestpassword'
    ]);
    Route::get('permission' , function () {
        if(Session::get('permission')){
            return view('student_teacher.index');
        }
        else{
            return redirect()->route('dashboard');
        }
    
    })->name('permission');

    Route::get('permission/verify' , function () {
       {
            return redirect()->route('dashboard');
       }
        
    })->name('submitpermission');
 
});
Route::prefix('admin')->group(function () {


    Route::get('charts', [
        'uses' => 'Admincontroller@index',
        'as'=>'admin.charts'
    ]);

    Route::get('create/user', [
        'uses' => 'Admincontroller@createuser',
        'as'=>'admin.create.user'
    ]);


    Route::get('show/user', [
        'uses' => 'Usercontroller@showuser',
        'as'=>'admin.show.user'
    ]);
    Route::get('tables', function () {
        return view('admin.tables');
    });

});

Route::get('/in/{username}', [
    'uses' => 'profilecontroller@user',
    'as' => 'profile'
]);

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth','emailverify','code','codegenerate'])->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/code', [
    'uses' => 'Admincontroller@code',
    'as'=>'code'
]);



// Route::get('user/manager/{id}', [
//     'uses' => 'Usercontroller@manager',
//     'as'=>'user.manager'
// ]);

//      Route::get('user/visitor/{id}', [
//     'uses' => 'Usercontroller@visitor',
//     'as'=>'user.visitor'
// ]);

Auth::routes(['verify' => true]);

// Route::get('/signup', function () {
//     return view('auth.register.register');
// });
Route::get('/teacher', function(){
    return view('admin.user.teacher');
}); 
    
Route::post('/teacher', [
    'uses' => 'Admincontroller@assi_add',
    'as'=>'assignment.add'
]);
Route::get('/teacher/disqus', [
    'uses' => 'Disquscontroller@add',
    'as' => 'disqus'
]);
Route::post('/student/search', [
    'uses' => 'Admincontroller@stu_search',
    'as'=>'student.search'
]);


