<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('art', [PageController::class, 'art'])->name('art');
Route::get('art/2020s', [PageController::class, 'art2020'])->name('art.2020');
Route::get('art/2010s', [PageController::class, 'art2010'])->name('art.2010');
Route::get('art/2000s', [PageController::class, 'art2000'])->name('art.2000');
Route::get('art/1990s', [PageController::class, 'art1990'])->name('art.1990');
Route::get('art/1980s', [PageController::class, 'art1980'])->name('art.1980');

//Route::get('architecture', [PageController::class, 'architecture'])->name('architecture');
Route::get('sculpture', [PageController::class, 'sculpture'])->name('sculpture');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::post('contact', [PageController::class, 'sendEmail'])->name('contact.send');
Route::get('design', [PageController::class, 'design'])->name('design');
Route::get('about', [PageController::class, 'about'])->name('about');

Route::get('architecture', [PageController::class, 'architecture'])->name('architecture');


Route::prefix('architecture')->group(function () {
    Route::get('/', [PageController::class, 'architecture'])->name('architecture');
    Route::get('monument-and-memorial-centre-zuc', [PageController::class, 'monumentZuc'])->name('monument-zuc');
    Route::get('mosque-jablanica', [PageController::class, 'mosqueJablanica'])->name('mosque-jablanica');
    Route::get('mosque-kakanj', [PageController::class, 'mosqueKakanj'])->name('mosque-kakanj');
    Route::get('multi-religious-complex-little-jerusalem', [PageController::class, 'multiReligionComplex'])->name('multi-religion-complex');
    Route::get('primary-school-sip', [PageController::class, 'schoolSip'])->name('school-sip');
    Route::get('selected-sketches-and-models', [PageController::class, 'selectedArch'])->name('selected-arch');
    Route::get('skender-pasha-mosque', [PageController::class, 'skenderPasha'])->name('skender-pasha');
    Route::get('tunnel-of-hope-museum', [PageController::class, 'tunneOfHope'])->name('tunnel-of-hope');
    Route::get('yugoslav-pavilion-proposal', [PageController::class, 'yugoslavPavilion'])->name('yugoslav-pavilion');
});

