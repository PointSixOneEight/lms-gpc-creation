<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Livewire\Admin\AdminAccounts;
use App\Http\Livewire\Profile;
use App\Http\Livewire\UpdateProfile;
use App\Http\Livewire\Teacher\Subjects;
use App\Http\Livewire\Teacher\ShowSubjects;
use App\Http\Livewire\Teacher\TeacherFile;
use App\Models\Subject;



Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);   
Route::get('/accounts', AdminAccounts::class )->name('accounts'); 

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard' , 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('/profile', Profile::class)->name('profile');    
    Route::get('/profile/update', UpdateProfile::class)->name('update-profile');  
   
});
Route::group(['middleware' => ['auth' , 'role:admin']], function(){

});


Route::group(['middleware' => ['auth' , 'role:teacher']], function(){
    Route::get('/subject', Subjects::class )->name('teacher_subject'); 
    Route::get('/subject/{subject}' ,ShowSubjects::class )->name('show_subject');
    Route::get('/subject/file' , TeacherFile::class)->name('teacher_file');
     
});

Route::group(['middleware' => ['auth' , 'role:student']], function(){
    
});

require __DIR__.'/auth.php';
