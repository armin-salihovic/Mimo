<?php

namespace App\Http\Controllers;


use App\Mail\MessageSent;
use App\Repositories\ArtRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    private ArtRepository $repository;

    public function __construct(ArtRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $arts = $this->repository->getFeaturedArt();

        return view('index-experimental', compact('arts'));
    }

    public function art()
    {
        return view('art.index');
    }


    public function art2020()
    {
        return view('art.2020');
    }

    public function art2010()
    {
        return view('art.2010');
    }

    public function art2000()
    {
        return view('art.2000');
    }

    public function art1990()
    {
        return view('art.1990');
    }

    public function art1980()
    {
        return view('art.1980');
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
        return view('contact', [
            'success' => false,
            'botSuccess' => true,
        ]);
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
        return view('architecture.architecture-details');
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

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'city' => 'required',
        ]);

        if($request->input('city') != 5) {
            return redirect()->route('contact')->with([
                'success' => false,
                'botSuccess' => false,
            ]);
        }

        Mail::to(['info@mimo.ba'])
            ->bcc(['armin.salihovic@live.com'])
            ->send(new MessageSent($request));

        return redirect()->back();
    }
}
