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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', array('uses' => 'LineKanbanBinController@index'));//->name('home');

Route::match(['get', 'post'], 'line-kanban-bins/select-all-line-kanban-bins-01', array('uses' => 'LineKanbanBinController@selectAllLineKanbanBins01'))->name('lineKanbanBin.selectAllLineKanbanBins01');

Route::match(['get', 'post'], 'line-kanban-bins/select-all-line-kanban-bins-02', array('uses' => 'LineKanbanBinController@selectAllLineKanbanBins02'))->name('lineKanbanBin.selectAllLineKanbanBins02');

Route::get('line-kanban-bins/index', array('uses' => 'LineKanbanBinController@index'))->name('lineKanbanBin.index');
Route::get('line-kanban-bin-requests/index', array('uses' => 'LineKanbanBinRequestController@index'))->name('lineKanbanBinRequest.index');

Route::post('line-kanban-bin-requests/store', array('uses' => 'LineKanbanBinRequestController@store'))->name('lineKanbanBinRequest.store');