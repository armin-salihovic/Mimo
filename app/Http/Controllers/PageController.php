<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function art()
    {
        return view('art');
    }

    public function sculpture()
    {
        return view('sculpture');
    }

    public function design()
    {
        return view('design');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function architecture()
    {
        return view('architecture.index');
    }

    public function monumentZuc()
    {
        return view('architecture.monument-and-memorial-centre-zuc');
    }
    public function mosqueJablanica()
    {
        return view('architecture.mosque-jablanica');
    }
    public function mosqueKakanj()
    {
        return view('architecture.mosque-kakanj');
    }
    public function multiReligionComplex()
    {
        return view('architecture.multi-religious-complex-little-jerusalem');
    }
    public function schoolSip()
    {
        return view('architecture.primary-school-sip');
    }
    public function selectedArch()
    {
        return view('architecture.selected-sketches-and-models');
    }
    public function skenderPasha()
    {
        return view('architecture.skender-pasha-mosque');
    }
    public function tunneOfHope()
    {
        return view('architecture.tunnel-of-hope-museum');
    }
    public function yugoslavPavilion()
    {
        return view('architecture.yugoslav-pavilion-proposal');
    }
}
