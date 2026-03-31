<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/courses', [PublicController::class, 'courses'])->name('courses');
Route::get('/courses/{slug}', [PublicController::class, 'courseShow'])->name('course.show');
Route::get('/faculty', [PublicController::class, 'faculty'])->name('faculty');
Route::get('/gallery', [PublicController::class, 'gallery'])->name('gallery');
Route::get('/events', [PublicController::class, 'events'])->name('events');
Route::get('/events/{slug}', [PublicController::class, 'eventShow'])->name('event.show');
Route::get('/blog', [PublicController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PublicController::class, 'blogShow'])->name('blog.show');
Route::get('/testimonials', [PublicController::class, 'testimonials'])->name('testimonials');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact', [PublicController::class, 'contactStore'])->name('contact.store');
Route::get('/payment', [PublicController::class, 'payment'])->name('payment');

Route::redirect('/admin', '/login');
Route::redirect('/admi', '/login');
Route::redirect('/staff', '/login');
Route::redirect('/portal', '/login');

// Admin Routes (Auth Required)
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('courses', CourseController::class);
    Route::resource('faculty', FacultyController::class);
    Route::resource('events', EventController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('enquiries', EnquiryController::class)->only(['index', 'show', 'update', 'destroy']);
    
    // Theme Settings
    Route::get('/settings/theme', [SettingController::class, 'theme'])->name('settings.theme');
    Route::post('/settings/theme', [SettingController::class, 'updateTheme'])->name('settings.theme.update');
});

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
