<?php

use Illuminate\Support\Facades\Route;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::get('student','App\Http\Controllers\StudentController@index')->name('student');
Route::get('student/add','App\Http\Controllers\StudentController@create')->name('addstudent');
Route::post('student/add','App\Http\Controllers\StudentController@store')->name('poststudent');
Route::get('student/edit/:id','App\Http\Controllers\StudentController@edit')->name('editstudent');
Route::put('student/edit/:id','App\Http\Controllers\StudentController@update')->name('updatestudent');

