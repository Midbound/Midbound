<?php

// Tracking Pixel
Route::get('/_mb.gif', 'TrackingPixelController@show')->name('tracking-url');