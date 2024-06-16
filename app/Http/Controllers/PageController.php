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

        return view('pages.home', [
            'arts' => $arts,
            'meta' => $this->getMetadata(false),
            'featuredImages' => $this->settings['children'] ?? [],
        ]);
    }

    public function contact()
    {
        return view('pages.contact', [
            'success' => false,
            'botSuccess' => true,
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to(['info@mimo.ba'])
            ->bcc(['armin.salihovic@live.com'])
            ->send(new MessageSent($request));

        return response()->json('OK!');
    }
}
