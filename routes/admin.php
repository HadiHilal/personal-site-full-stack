<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'namespaces' => 'Admin' , 'middleware' => ['auth']], function () {
    Route::view('/home', 'admin/home')->name('myhome');


    // settings route
    Route::get('/settingsShow', 'Admin\SettingsController@index')->name('admin.settings');
    //Route::post('/settings/update/', 'Admin\SettingsController@update')->name('settings.update');

    // about routes
    Route::get('/about/index', 'Admin\AboutController@index')->name('about');
    Route::post('/about/add', 'Admin\AboutController@store')->name('about.add');
    Route::get('/about/edit/{id}', 'Admin\AboutController@edit')->name('about.edit');
    Route::post('/about/update/{id}', 'Admin\AboutController@update')->name('about.update');


    // i use routes
    Route::get('/iuse', 'Admin\IUseController@index')->name('iuse.index');
    Route::post('/iuse/add', 'Admin\IUseController@store')->name('iuse.add');
    Route::get('/iuse/show', 'Admin\IUseController@show')->name('iuse.show');
    Route::get('/iuse/delete/{id}', 'Admin\IUseController@destroy')->name('iuse.delete');
    Route::get('/iuse/edit/{id}', 'Admin\IUseController@edit')->name('iuse.edit');
    Route::post('/iuse/update/{id}', 'Admin\IUseController@update')->name('iuse.update');

    // averge routes
    Route::get('/averge', 'Admin\AvergeController@index')->name('averge.index');
    Route::post('/averge/add', 'Admin\AvergeController@store')->name('averge.add');
    Route::get('/averge/show', 'Admin\AvergeController@show')->name('averge.show');
    Route::get('/averge/delete/{id}', 'Admin\AvergeController@destroy')->name('averge.delete');
    Route::get('/averge/edit/{id}', 'Admin\AvergeController@edit')->name('averge.edit');
    Route::post('/averge/update/{id}', 'Admin\AvergeController@update')->name('averge.update');

    // portofolio routes
    Route::get('/porto', 'Admin\PortoController@index')->name('porto.index');
    Route::post('/porto/add', 'Admin\PortoController@store')->name('porto.add');
    Route::get('/porto/show', 'Admin\PortoController@show')->name('porto.show');
    Route::get('/porto/delete/{id}', 'Admin\PortoController@destroy')->name('porto.delete');
    Route::get('/porto/edit/{id}', 'Admin\PortoController@edit')->name('porto.edit');
    Route::post('/porto/update/{id}', 'Admin\PortoController@update')->name('porto.update');

    // social routes
    Route::get('/social', 'Admin\SocialController@index')->name('social.index');
    Route::post('/social/add', 'Admin\SocialController@store')->name('social.add');
    Route::get('/social/show', 'Admin\SocialController@show')->name('social.show');
    Route::get('/social/delete/{id}', 'Admin\SocialController@destroy')->name('social.delete');
    Route::get('/social/edit/{id}', 'Admin\SocialController@edit')->name('social.edit');
    Route::post('/social/update/{id}', 'Admin\SocialController@update')->name('social.update');

    //main skills routes

    Route::get('/mainskills', function(){
        return view('admin.skil_links');
    })->name('skill.links');

    // skills title  routes
    Route::get('/skill_title', 'Admin\SkillTitleController@index')->name('skill_title.index');
    Route::post('/skill_title/add', 'Admin\SkillTitleController@store')->name('skill_title.add');
    Route::get('/skill_title/show', 'Admin\SkillTitleController@show')->name('skill_title.show');
    Route::get('/skill_title/delete/{id}', 'Admin\SkillTitleController@destroy')->name('skill_title.delete');
    Route::get('/skill_title/edit/{id}', 'Admin\SkillTitleController@edit')->name('skill_title.edit');
    Route::post('/skill_title/update/{id}', 'Admin\SkillTitleController@update')->name('skill_title.update');


    // skills desc  routes
    Route::get('/skill_desc', 'Admin\SkillItemController@index')->name('skill_desc.index');
    Route::post('/skill_desc/add', 'Admin\SkillItemController@store')->name('skill_desc.add');
    Route::get('/skill_desc/show', 'Admin\SkillItemController@show')->name('skill_desc.show');
    Route::get('/skill_desc/delete/{id}', 'Admin\SkillItemController@destroy')->name('skill_desc.delete');
    Route::get('/skill_desc/edit/{id}', 'Admin\SkillItemController@edit')->name('skill_desc.edit');
    Route::post('/skill_desc/update/{id}', 'Admin\SkillItemController@update')->name('skill_desc.update');


    // users  routes
    Route::get('/user', 'Admin\UserController@index')->name('user.index');
    Route::get('/user/edit/{id}', 'Admin\UserController@edit')->name('user.edit');
    Route::post('/user/update/{id}', 'Admin\UserController@update')->name('user.update');


    // message  routes
    Route::get('/message', 'Admin\MessageController@index')->name('message.index');
    Route::get('/message/delete/{id}', 'Admin\MessageController@destroy')->name('message.delete');



    });
