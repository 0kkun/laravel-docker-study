<?php

Route::get('dbstudy', 'DBStudyController@index');
Route::get('dbstudy/show', 'DBStudyController@show');

Route::get('dbstudy/add', 'DBStudyController@add');
Route::post('dbstudy/add', 'DBStudyController@create');

Route::get('dbstudy/edit', 'DBStudyController@edit');
Route::post('dbstudy/edit', 'DBStudyController@update');