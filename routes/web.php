<?php

use App\Livewire\Admin\Ai\AiAssistantComponent;
use App\Livewire\Admin\Ai\CreateAiAssistantComponent;
use App\Livewire\Admin\Ai\EditAiAssistantComponent;
use App\Livewire\Admin\Category\CategoriesComponent;
use App\Livewire\Admin\Category\CreateCategoryComponent;
use App\Livewire\Admin\Category\EditCategoryComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
});
Route::middleware(['admin','verified'])->prefix('admin')->group(function (){
   Route::get('/dashboard',function(){ return view('admindashboard');})->name('admin.dashboard');
   Route::prefix('category')->group(function(){
     Route::get('/all',CategoriesComponent::class)->name('admin.categories');
     Route::get('/edit/{id}',EditCategoryComponent::class)->name('admin.edit_category');
     Route::get('/create',CreateCategoryComponent::class)->name('admin.create_category');
   });
   Route::prefix('ai')->group(function(){
    Route::get('/assistants',AiAssistantComponent::class)->name('admin.ai_assistant');
    Route::get('/create/assistant',CreateAiAssistantComponent::class)->name('admin.create_ai');
    Route::get('/{id}/edit',EditAiAssistantComponent::class)->name('admin.edit_ai');
   });
});