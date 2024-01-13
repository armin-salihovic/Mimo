<?php

namespace App\Http\Controllers;


use App\Mail\MessageSent;
use App\Repositories\ArtRepository;
use App\Services\SettingService;
use App\Traits\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    use Seo;

    private ArtRepository $repository;
    private $settings;

    public function __construct(ArtRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $arts = $this->repository->getFeaturedArt();

        $this->settings = SettingService::getSettings("home.page");

        return view('index-experimental', [
            'arts' => $arts,
            'meta' => $this->getMetadata(false),
            'featuredImages' => $this->settings['children'] ?? [],
        ]);
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
