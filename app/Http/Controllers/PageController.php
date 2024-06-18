<?php

namespace App\Http\Controllers;


use App\Mail\MessageSent;
use App\Repositories\ArtRepository;
use App\Repositories\PageRepository;
use App\Services\SettingService;
use App\Traits\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    use Seo;

    private ArtRepository $artRepository;
    private PageRepository $pageRepository;
    private $settings;

    public function __construct(
        ArtRepository $artRepository,
        PageRepository $pageRepository
    ) {
        $this->artRepository = $artRepository;
        $this->pageRepository = $pageRepository;
    }

    public function homepage()
    {
        $arts = $this->artRepository->getFeaturedArt();

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
        return $this->show('about');
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

    function show($slug)
    {
        $page = $this->pageRepository->forSlug($slug);

        if ($page === null) abort(404);

        return view('pages.page', [
            'page' => $page,
            'meta' => [
                'title' => $page->meta_title,
                'description' => $page->description,
                'thumbnail' => $page->image('thumbnail') . '&width=750',
            ],
        ]);
    }
}
