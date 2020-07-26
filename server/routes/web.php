<?php

Route::get('dbstudy', 'DBStudyController@index');
Route::get('dbstudy/show', 'DBStudyController@show');

Route::get('dbstudy/add', 'DBStudyController@add');
Route::post('dbstudy/add', 'DBStudyController@create');

Route::get('dbstudy/edit', 'DBStudyController@edit');
Route::post('dbstudy/edit', 'DBStudyController@update');


Route::get('/ServiceStudy', 'ServiceStudyController@index')->name('ServiceStudy');
Route::get('/ServiceStudy/{id}', 'ServiceStudyController@index')->name('ServiceStudy');

Route::get('/ServiceStudy/json', 'ServiceStudyController@json');
Route::get('/ServiceStudy/json/{id}', 'ServiceStudyController@json');
