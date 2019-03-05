<?php

Route::view("/","index");
Route::view("/add_seed","add_seed");

Route::get("/show_seed","SeedController@show_seed");
Route::post("/add_seed2","SeedController@add_seed2");
Route::get("edit_seed/{id}","SeedController@edit_seed");
Route::delete("{id}","SeedController@delete_seed");
Route::put("{id}","SeedController@edit_seed2");

