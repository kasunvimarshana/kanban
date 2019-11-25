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

Route::match(['get', 'post'], 'line-kanban-bins/select-all-line-kanban-bins-01', array('uses' => 'LineKanbanBinController@selectAllLineKanbanBins01'))->name('LineKanbanBinController.selectAllLineKanbanBins01');

Route::match(['get', 'post'], 'line-kanban-bins/select-all-line-kanban-bins-02', array('uses' => 'LineKanbanBinController@selectAllLineKanbanBins02'))->name('LineKanbanBinController.selectAllLineKanbanBins02');