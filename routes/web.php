<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontendController@index');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('backend/textBlocks', ['as'=> 'backend.textBlocks.index', 'uses' => 'Backend\TextBlockController@index']);
Route::post('backend/textBlocks', ['as'=> 'backend.textBlocks.store', 'uses' => 'Backend\TextBlockController@store']);
Route::get('backend/textBlocks/create', ['as'=> 'backend.textBlocks.create', 'uses' => 'Backend\TextBlockController@create']);
Route::put('backend/textBlocks/{textBlocks}', ['as'=> 'backend.textBlocks.update', 'uses' => 'Backend\TextBlockController@update']);
Route::patch('backend/textBlocks/{textBlocks}', ['as'=> 'backend.textBlocks.update', 'uses' => 'Backend\TextBlockController@update']);
Route::delete('backend/textBlocks/{textBlocks}', ['as'=> 'backend.textBlocks.destroy', 'uses' => 'Backend\TextBlockController@destroy']);
Route::get('backend/textBlocks/{textBlocks}', ['as'=> 'backend.textBlocks.show', 'uses' => 'Backend\TextBlockController@show']);
Route::get('backend/textBlocks/{textBlocks}/edit', ['as'=> 'backend.textBlocks.edit', 'uses' => 'Backend\TextBlockController@edit']);


Route::get('backend/blocks', ['as'=> 'backend.blocks.index', 'uses' => 'Backend\BlockController@index']);
Route::post('backend/blocks', ['as'=> 'backend.blocks.store', 'uses' => 'Backend\BlockController@store']);
Route::get('backend/blocks/create', ['as'=> 'backend.blocks.create', 'uses' => 'Backend\BlockController@create']);
Route::put('backend/blocks/{blocks}', ['as'=> 'backend.blocks.update', 'uses' => 'Backend\BlockController@update']);
Route::patch('backend/blocks/{blocks}', ['as'=> 'backend.blocks.update', 'uses' => 'Backend\BlockController@update']);
Route::delete('backend/blocks/{blocks}', ['as'=> 'backend.blocks.destroy', 'uses' => 'Backend\BlockController@destroy']);
Route::get('backend/blocks/{blocks}', ['as'=> 'backend.blocks.show', 'uses' => 'Backend\BlockController@show']);
Route::get('backend/blocks/{blocks}/edit', ['as'=> 'backend.blocks.edit', 'uses' => 'Backend\BlockController@edit']);


Route::get('backend/photos', ['as'=> 'backend.photos.index', 'uses' => 'Backend\PhotoController@index']);
Route::put('backend/photos/{photos}', ['as'=> 'backend.photos.update', 'uses' => 'Backend\PhotoController@update']);
Route::patch('backend/photos/{photos}', ['as'=> 'backend.photos.update', 'uses' => 'Backend\PhotoController@update']);
Route::delete('backend/photos/{photos}', ['as'=> 'backend.photos.destroy', 'uses' => 'Backend\PhotoController@destroy']);
Route::get('backend/photos/{photos}', ['as'=> 'backend.photos.show', 'uses' => 'Backend\PhotoController@show']);
Route::get('backend/photos/{photos}/edit', ['as'=> 'backend.photos.edit', 'uses' => 'Backend\PhotoController@edit']);
Route::post('/upload', 'Backend\PhotoController@upload')->name('upload');


Route::get('backend/gallery', ['as'=> 'backend.gallery.index', 'uses' => 'Backend\GalleryController@index']);
Route::delete('backend/gallery/{photos}', ['as'=> 'backend.gallery.destroy', 'uses' => 'Backend\GalleryController@destroy']);
Route::get('backend/gallery/{photos}', ['as'=> 'backend.gallery.show', 'uses' => 'Backend\GalleryController@show']);
Route::post('/uploadGallery', 'Backend\GalleryController@upload')->name('gallery.upload');