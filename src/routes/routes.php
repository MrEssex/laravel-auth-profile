<?php

Route::get('/profile', 'MrEssex\LaravelAuthProfile\AuthProfileController@viewCurrentUserProfile')->name('profile');

Route::post('/profile', 'MrEssex\LaravelAuthProfile\AuthProfileController@editCurrentUserProfile')->name('edit-profile');