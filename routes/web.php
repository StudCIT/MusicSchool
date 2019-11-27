<?php

Auth::routes();

// Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function () {
        return view('admin.home');
    })->name('admin');
// });
//Backend

Route::get('/admin/gallery', 'GalleryController@pageGallery');
Route::get('/admin/contact', 'InfoController@pageContact');

Route::get('/admin/profile/{id}', function () {
    return view('admin.profile');
})->name('profile');

//Отделы
Route::get('/admin/department', 'DepartmentController@pageDepartments');
Route::get('/admin/teacher', 'DepartmentController@pageTeacher');
Route::get('/admin/instrument', 'DepartmentController@pageInstrument');

Route::get('get-all-department', 'DepartmentController@getDepartments');
Route::post('post-department', 'DepartmentController@postDepartments');
Route::post('update-department/{id}/', 'DepartmentController@updateDepartments');

Route::get('/teacher/{id}', 'DepartmentController@getTeachers');
Route::get('/instrument/{id}', 'DepartmentController@getInstruments');

Route::post('post-teacher', 'DepartmentController@postTeachers');
Route::post('post-instrument', 'DepartmentController@postInstruments');
Route::post('update-teacher/{id}/', 'DepartmentController@uupdateTeachers');
Route::post('update-instrument/{id}/', 'DepartmentController@updateInstruments');

Route::post('delete-department/{id}/', 'DepartmentController@deleteDepartments');
Route::post('delete-teacher/{id}/', 'DepartmentController@deleteTeachers');
Route::post('delete-instrument/{id}/', 'DepartmentController@deleteInstruments');

//Документы
Route::get('get-document', 'DocumentController@getDocument');
Route::post('post-document', 'DocumentController@postDocument');

//Меню
Route::get('/admin/info', 'InfoController@pageInfo');

Route::get('get-info', 'InfoController@getInfo');
Route::post('post-info', 'InfoController@postInfo');
Route::post('update-info/{id}/', 'InfoController@updateInfo');
Route::post('delete-info/{id}/', 'InfoController@deleteInfo');

//Вступ
Route::get('/admin/intro', 'IntroController@pageIntro');

Route::get('get-intro', 'IntroController@getIntro');
Route::post('post-intro', 'IntroController@postIntro');
Route::post('update-intro/{id}/', 'IntroController@updateIntro');
Route::post('delete-intro/{id}/', 'IntroController@deleteIntro');

//Новости Достижения История

Route::get('/admin/story', 'NewsAchieveStoryController@pageStory');
Route::get('/admin/achieve', 'NewsAchieveStoryController@pageAchieve');
Route::get('/admin/news', 'NewsAchieveStoryController@pageNews');

Route::get('get-nas', 'NewsAchieveStoryController@getNewsAchieveStory');
Route::get('get-news', 'NewsAchieveStoryController@getNews');
Route::get('get-achieve', 'NewsAchieveStoryController@getAchieve');
Route::get('get-story', 'NewsAchieveStoryController@getStory');

Route::post('post-news', 'NewsAchieveStoryController@postNews');
Route::post('post-achieve', 'NewsAchieveStoryController@postAchieve');
Route::post('post-story', 'NewsAchieveStoryController@postStory');

Route::post('update-news/{id}/', 'NewsAchieveStoryController@updateNews');
Route::post('update-achieve/{id}/', 'NewsAchieveStoryController@updateAchieve');
Route::post('update-story/{id}/', 'NewsAchieveStoryController@updateStory');

Route::post('delete-news/{id}/', 'NewsAchieveStoryController@deleteNews');
Route::post('delete-achieve/{id}/', 'NewsAchieveStoryController@deleteAchieve');
Route::post('delete-story/{id}/', 'NewsAchieveStoryController@deleteStory');

Route::get('/{any}', 'SpaController@index')->where('any', '.*');