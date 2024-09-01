<?php

namespace App\Http\Controllers\Twill;

use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
        return view('twill.settings.form');
    }
}
