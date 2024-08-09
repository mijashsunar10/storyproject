<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\StroyDetailsController;
use App\Http\Controllers\UserStoryController;
use App\Models\Category;
use App\Models\Storydetails;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'home'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);

Route::get('/storyindex',[StoryController::class,'index'])->middleware(['auth', 'verified'])->name('storyindex');

Route::get('/profile',[StoryController::class,'profile'])->middleware(['auth', 'verified'])->name('profile');

//Category....

Route::get('viewcategory',[AdminController::class,'viewcategory'])->middleware(['auth','admin'])->name('viewcategory');

Route::post('add_category',[AdminController::class,'add_category'])->middleware(['auth','admin'])->name('add_category');

Route::get('delete_category/{id}',[AdminController::class,'delete_category'])->middleware(['auth','admin'])->name('delete_category');

Route::get('edit_category/{id}',[AdminController::class,'edit_category'])->middleware(['auth','admin'])->name('edit_category');

Route::post('update_category/{id}',[AdminController::class,'update_category'])->middleware(['auth','admin'])->name('update_category');

////Category....

//Storydetails

Route::get('storydetails_create',[StoryController::class,'storydetails_create'])->middleware(['auth', 'verified'])->name('storydetails_create');

Route::post('/storydetails_store',[StoryController::class,'storydetails_store'])->middleware(['auth', 'verified'])->name('storydetails_store');

Route::get('storydetails/{id}',[StroyDetailsController::class,'show'])->middleware(['auth', 'verified'])->name('storydetails.show');

Route::get('/storydetails/{id}/edit',[StoryController::class,'edit'])->middleware(['auth', 'verified'])->name('storydetails.edit');
// Route::get('storydetails_show/{id}',[StoryController::class,'storydetails_show'])->middleware(['auth', 'verified'])->name('storydetails_show');

Route::put('/storydetails/{id}', [StoryController::class, 'update'])->middleware(['auth', 'verified'])->name('storydetails.update');

Route::get('storywriting',[StoryController::class,'write'])->middleware(['auth', 'verified'])->name('storywriting');


// Route::get('storydetails/{storydetails}/chapters', [ChapterController::class, 'index'])->name('chapters.index');
// Route::get('storydetails/{id}/chapters', [ChapterController::class, 'index'])->name('chapters.index');
Route::get('storydetails/{storydetails_id}/chapters/create', [ChapterController::class, 'create'])->middleware(['auth', 'verified'])->name('chapters.create');

Route::post('storydetails/{storydetails_id}/chapters', [ChapterController::class, 'store'])->middleware(['auth', 'verified'])->name('chapters.store');

Route::get('storydetails/{storydetails_id}/chapters', [ChapterController::class, 'index'])->name('chapters.index');
// Route::get('storydetails/{storydetails_id}/chapters/{id}/edit', [ChapterController::class, 'edit'])->name('chapters.edit');
// Route::get('storydetails/{storydetails_id}/chapters/{id}', [ChapterController::class, 'destroy'])->name('chapters.delete');
Route::get('chapters/{id}', [ChapterController::class, 'show'])->name('chapters.show');

Route::get('/chapters/{id}/edit', [ChapterController::class, 'edit'])->name('chapters.edit');
Route::put('/chapters/{id}', [ChapterController::class, 'update'])->name('chapters.update');
Route::delete('/chapters/{id}', [ChapterController::class, 'destroy'])->name('chapters.destroy');




// Route::get('tableofContent',[StoryController::class,'tableofContent'])->middleware(['auth', 'verified'])->name('tableofContent');

Route::get('new',[StoryController::class,'new']);

Route::get('/tableofContent',function()
{
    return view('frontend.tableofContent');
});

// Route::resource('storydetails',StroyDetailsController::class)->middleware(['auth', 'verified']);

// Route::get('/user/stories', [App\Http\Controllers\StoryDetailsController::class, 'userStories'])->name('user.stories');


Route::get('/user/stories', [UserStoryController::class, 'index'])->name('user.stories.index');
Route::get('/user/stories/{storydetails_id}/edit', [UserStoryController::class, 'editStory'])->name('user.stories.edit');
Route::put('/user/stories/{storydetails_id}', [UserStoryController::class, 'updateStory'])->name('user.stories.update');
Route::delete('/user/stories/{storydetails_id}', [UserStoryController::class, 'destroyStory'])->name('user.stories.destroy');

Route::get('/user/stories/{storydetails_id}/chapters', [UserStoryController::class, 'listChapters'])->name('user.chapters.index');
Route::get('/user/stories/{storydetails_id}/chapters/create', [UserStoryController::class, 'createChapter'])->name('user.chapters.create');
Route::post('/user/stories/{storydetails_id}/chapters', [UserStoryController::class, 'storeChapter'])->name('user.chapters.store');
Route::get('/user/chapters/{chapter_id}/edit', [UserStoryController::class, 'editChapter'])->name('user.chapters.edit');
Route::put('/user/chapters/{chapter_id}', [UserStoryController::class, 'updateChapter'])->name('user.chapters.update');
Route::delete('/user/chapters/{chapter_id}', [UserStoryController::class, 'destroyChapter'])->name('user.chapters.destroy');







Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/stories/{id}', [CategoryController::class, 'story'])->name('categories.story');
Route::get('/stories/{story_id}/chapters/{chapter_id}', [CategoryController::class, 'chapter'])->name('categories.chapter');

Route::get('/storywriting',function()
{
    return view('frontend.storywriting');
});





require __DIR__.'/auth.php';    
