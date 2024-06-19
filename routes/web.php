<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function()
{
    return view("home");
});
Route::get("/home", function()
{
    return view("home");
});

Route::get("/kalkulator", function()
{
    return view("kalkulator");
});

Route::get("/berita", function()
{
    return view("berita");
});
