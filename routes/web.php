<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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


Route::get('/dashboard', function () {
    return view('admin.admin_home');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth','verified'])->group(function () {
    Route::get('/admin/home', [Admincontroller::class, 'index'])->name('admin.home');
    Route::get('/admin/logout', [Admincontroller::class, 'logout'])->name('admin.logout');
    Route::get('/admin/tables', [Admincontroller::class, 'table'])->name('admin.tables');
    Route::get('/admin/createuser', [Admincontroller::class, 'createuser'])->name('admin.createuser');
    Route::get('/admin/create/page', [Admincontroller::class, 'createPage']);
    Route::get('/admin/edit/tables', [Admincontroller::class, 'editPage']);

    //rating

    Route::get('/admin/rating', [Admincontroller::class, 'rating'])->name('admin.rating');
    Route::get('/admin/ratingtable', [Admincontroller::class, 'ratingtable'])->name('admin.ratingtable');
    Route::post('/admin/storeuser', [Admincontroller::class, 'storeuser'])->name('admin.storeuser');
    Route::post('/admin/storerating', [Admincontroller::class, 'storerating'])->name('admin.ratingstore');
    Route::get('/admin/editrating/{id}', [Admincontroller::class, 'editrating'])->name('admin.editrating');
    Route::put('/admin/updaterating/{id}', [Admincontroller::class, 'updaterating'])->name('admin.updaterating');
    Route::delete('/admin/deleterating/{id}', [Admincontroller::class, 'deleterating'])->name('admin.deleterating');

    //destination
    Route::get('/admin/createdestination/', [Admincontroller::class, 'createdestination'])->name('admin.createdestination');
    Route::post('/admin/storedestination/', [Admincontroller::class, 'storedestination'])->name('admin.storedestination');
    Route::get('/admin/destinationtable/',[AdminController::class,'destinationtable'])->name('admmin.destinationtable');
    Route::get('/admin/editdestination/{id}', [Admincontroller::class, 'editdestination'])->name('admin.editdestination');

    Route::put('/admin/updatedestination/{id}', [Admincontroller::class, 'updatedestination'])->name('admin.updatedestination');
    Route::delete('/admin/deletedestination/{id}', [Admincontroller::class, 'deletedestination'])->name('admin.deletedestination');



    //blog
    Route::get('/admin/createblog/',[AdminController::class,'createblog'])->name('admin.createblog');
    Route::post('/admin/storeblog/',[AdminController::class,'storeblog'])->name('admin.createblog');
    Route::get('/admin/blogtable/',[AdminController::class,'blogtable']);
    Route::get('admin/editblog/{id}',[AdminController::class,'editblog']);
    Route::put('/admin/updateblog/{id}',[AdminController::class,'updateblog']);
    Route::delete('/admin/deleteblog/{id}',[AdminController::class,'deleteblog']);

    //instructor
    Route::get('/admin/createinstructor/',[AdminController::class,'createinstructor']);
    Route::post('/admin/storeinstructor/',[AdminController::class,'storeinstructor']);
    Route::get('/admin/instructortable/',[AdminController::class,'instructortable']);
    Route::get('admin/editinstructor/{id}',[AdminController::class,'editinstructor']);
    Route::put('/admin/updateinstructor/{id}',[AdminController::class,'updateinstructor']);
    Route::delete('/admin/deleteinstructor/{id}',[AdminController::class,'deleteinstructor']);

    //banner
    Route::get('/admin/createbanner/',[AdminController::class,'createbanner']);
    Route::post('/admin/storebanner/',[AdminController::class,'storebanner']);
    Route::get('/admin/bannertable/',[AdminController::class,'bannertable']);
    Route::get('admin/editbanner/{id}',[AdminController::class,'editbanner']);
    Route::put('/admin/updatebanner/{id}',[AdminController::class,'updatebanner']);
    Route::delete('/admin/deletebanner/{id}',[AdminController::class,'deletebanner']);

    //courses
    Route::get('/admin/createcourses/',[AdminController::class,'createcourses']);
    Route::post('/admin/storecourses/',[AdminController::class,'storecourses']);
    Route::get('/admin/coursestable/',[AdminController::class,'coursestable']);
    Route::get('admin/editcourses/{id}',[AdminController::class,'editcourses']);
    Route::put('/admin/updatecourses/{id}',[AdminController::class,'updatecourses']);
    Route::delete('/admin/deletecourses/{id}',[AdminController::class,'deletecourses']);
    


    //branch
    Route::get('/admin/createbranch/',[AdminController::class,'createbranch']);
    Route::post('/admin/storebranch/',[AdminController::class,'storebranch']);
    Route::get('/admin/branchtable/',[AdminController::class,'branchtable']);
    Route::get('admin/editbranch/{id}',[AdminController::class,'editbranch']);
    Route::put('/admin/updatebranch/{id}',[AdminController::class,'updatebranch']);
    Route::delete('/admin/deletebranch/{id}',[AdminController::class,'deletebranch']);


     //division
     Route::get('/admin/createdivision/',[AdminController::class,'createdivision']);
     Route::post('/admin/storedivision/',[AdminController::class,'storedivision']);
     Route::get('/admin/divisiontable/',[AdminController::class,'divisiontable']);
     Route::get('admin/editdivision/{id}',[AdminController::class,'editdivisionpage']);
     Route::put('/admin/updatedivision/{id}',[AdminController::class,'updatedivision']);
     Route::delete('/admin/deletedivision/{id}',[AdminController::class,'deletedivision']);


     //meta
     Route::get('/admin/meta/',[AdminController::class,'meta']);
     Route::post('/admin/storemeta/',[AdminController::class,'storemeta']);
     Route::get('/admin/metatable',[AdminController::class,'metatable']);
     Route::get('admin/editmeta/{id}',[AdminController::class,'editmeta']);
     Route::put('/admin/updatemeta/{id}',[AdminController::class,'updatemeta']);
     Route::delete('/admin/deletemeta/{id}',[AdminController::class,'deletemeta']);


     //services
     Route::get('/admin/createservice/',[AdminController::class,'createservice']);
     Route::post('/admin/storeservice/',[AdminController::class,'storeservice']);
     Route::get('/admin/servicetable/',[AdminController::class,'servicetable']);
     Route::get('admin/editservice/{id}',[AdminController::class,'editservice']);
     Route::put('/admin/updateservice/{id}',[AdminController::class,'updateservice']);
     Route::delete('/admin/deleteservice/{id}',[AdminController::class,'deleteservice']);

});

require __DIR__.'/auth.php';
Route::get('/', [Homecontroller::class, 'index']);
Route::get('/home', [Homecontroller::class, 'index']);
Route::get('/signup', [Homecontroller::class, 'signup']);
Route::get('/blog', [Homecontroller::class, 'blog']);
Route::get('/contact', [Homecontroller::class, 'contact']);
Route::get('/destination', [Homecontroller::class, 'destination']);
Route::get('/about', [Homecontroller::class, 'about']);
Route::get('/testimonials', [Homecontroller::class, 'testimonials']);
Route::get('/destination/details/{id}', [Homecontroller::class, 'destinationdetail']);
Route::get('/blog/details/{id}', [Homecontroller::class, 'blogdetail']);
Route::post('/storeuser', [Homecontroller::class, 'storeuser']);
Route::get('/courses', [Homecontroller::class, 'courses']);
Route::get('/courses/details/{id}', [Homecontroller::class, 'coursesdetail']);
Route::get('/branch/detail/{id}', [Homecontroller::class, 'branchdetail']);
Route::get('/services', [Homecontroller::class, 'services']);
Route::get('/service/details/{id}', [Homecontroller::class, 'servicedetail']);
