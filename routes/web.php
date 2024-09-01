<?php

use App\Http\Controllers\ArchitectureController;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SculptureController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('home');
Route::get('art', [ArtController::class, 'index'])->name('art');

Route::get('art/2020s', [ArtController::class, 'art2020'])->name('art.2020');
Route::get('art/2020s/{serial_number}', [ArtController::class, 'art2020show'])->name('art.2020.show');

Route::get('art/2010s', [ArtController::class, 'art2010'])->name('art.2010');
Route::get('art/2010s/{serial_number}', [ArtController::class, 'art2010show'])->name('art.2010.show');

Route::get('art/2000s', [ArtController::class, 'art2000'])->name('art.2000');
Route::get('art/2000s/{serial_number}', [ArtController::class, 'art2000show'])->name('art.2000.show');

Route::get('art/1990s', [ArtController::class, 'art1990'])->name('art.1990');
Route::get('art/1990s/{serial_number}', [ArtController::class, 'art1990show'])->name('art.1990.show');

Route::get('art/1980s', [ArtController::class, 'art1980'])->name('art.1980');
Route::get('art/1980s/{serial_number}', [ArtController::class, 'art1980show'])->name('art.1980.show');

Route::get('art/{serial_number}', [ArtController::class, 'show'])->name('art.show');

Route::get('sculpture', [SculptureController::class, 'index'])->name('sculpture');
Route::get('sculpture/{slug}', [SculptureController::class, 'show'])->name('sculpture.show');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::post('contact', [PageController::class, 'sendEmail'])->name('contact.send');
Route::get('designs', [DesignController::class, 'index'])->name('designs');
Route::get('designs/{slug}', [DesignController::class, 'show'])->name('designs.show');
Route::get('about', [PageController::class, 'about'])->name('about');

Route::get('architecture', [PageController::class, 'architecture'])->name('architecture');

Route::prefix('architecture')->group(function () {
    Route::get('/', [ArchitectureController::class, 'index'])->name('architecture');
    Route::get('{architecture}', [ArchitectureController::class, 'show'])->name('architecture.show');
//    Route::get('monument-and-memorial-centre-zuc', [PageController::class, 'monumentZuc'])->name('monument-zuc');
//    Route::get('mosque-jablanica', [PageController::class, 'mosqueJablanica'])->name('mosque-jablanica');
//    Route::get('mosque-kakanj', [PageController::class, 'mosqueKakanj'])->name('mosque-kakanj');
//    Route::get('multi-religious-complex-little-jerusalem', [PageController::class, 'multiReligionComplex'])->name('multi-religion-complex');
//    Route::get('primary-school-sip', [PageController::class, 'schoolSip'])->name('school-sip');
//    Route::get('selected-sketches-and-models', [PageController::class, 'selectedArch'])->name('selected-arch');
//    Route::get('skender-pasha-mosque', [PageController::class, 'skenderPasha'])->name('skender-pasha');
//    Route::get('tunnel-of-hope-museum', [PageController::class, 'tunneOfHope'])->name('tunnel-of-hope');
//    Route::get('yugoslav-pavilion-proposal', [PageController::class, 'yugoslavPavilion'])->name('yugoslav-pavilion');
});

//Route::get('news', [NewsController::class, 'index'])->name('news');
//Route::get('news/{news}', [NewsController::class, 'show'])->name('news.show');
