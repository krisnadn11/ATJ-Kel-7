<?php

use Illuminate\Support\Facades\Route;
use App\Models\Config_Sympozia;
use App\Http\Controllers\DiscussionControler;
use App\Http\Controllers\ButtonController;
use App\Http\Controllers\PendaftaranController;


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
    /*if(Config_Sympozia::where('code', 'FRP')->first()->status)
        return view('welcome');
    else
    */
    return redirect()->route('home');
});

Auth::routes();


Route::get('/home', \App\Http\Livewire\Arsys\Idx::class)->name('home')->middleware('cas.auth');
Route::get('/user/refresh', function () {
    \Session::flush();
    cas()->logout();
    return redirect('/');
})->name('user.refresh');

Route::get('/user/profile/create', \App\Http\Livewire\Arsys\User\Profile\Create\Idx::class)->name('arsys.user.profile.create');
Route::get('/user/profile/view', \App\Http\Livewire\Arsys\User\Profile\View\Idx::class)->name('arsys.user.profile.view');
Route::get('/user/profile/edit', \App\Http\Livewire\Arsys\User\Profile\Edit\Idx::class)->name('arsys.user.profile.edit');
Route::get('/admin/user', \App\Http\Livewire\Arsys\Admin\User\Idx::class)->name('arsys.admin.user');
Route::get('/admin/config/institution', \App\Http\Livewire\Arsys\Admin\Config\Institution\Idx::class)->name('arsys.admin.config.institution');

//ATJ
Route::get('/atj/landing-page', \App\Http\Livewire\atj\Idx::class)->name('atj.home');
Route::get('/Reviewer/landing-page', \App\Http\Livewire\Reviewer\Idx::class)->name('Reviewer.home');


//Supervision
Route::get('/supervision/landing-page', \App\Http\Livewire\Supervision\Idx::class)->name('supervision.home');
Route::get('/supervisor/landing-page', \App\Http\Livewire\Supervisor\Idx::class, PendaftaranController::class)->name('supervisor.home');

//Discussion
Route::get('supervisor/discussions', [DiscussionControler::class, 'index'])->name('discussions.index');
Route::post('supervisor/discussions', [DiscussionControler::class, 'store'])->name('discussions.store');

//Button bypass
Route::get('/button', [ButtonController::class, 'index'])->name('button.index');
Route::post('/button', [ButtonController::class, 'toggle'])->name('button.toggle');

//Pendaftaran
Route::get('supervisor/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::post('supervisor/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

//Route::resource('supervisor/landing-page', PendaftaranController::class);

