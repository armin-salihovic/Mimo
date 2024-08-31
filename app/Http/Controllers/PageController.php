<?php

namespace App\Http\Controllers;


use A17\Twill\Facades\TwillAppSettings;
use App\Mail\MessageSent;
use App\Repositories\ArtRepository;
use App\Repositories\PageRepository;
use App\Traits\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    use Seo;

    private ArtRepository $artRepository;
    private PageRepository $pageRepository;

    public function __construct(
        ArtRepository $artRepository,
        PageRepository $pageRepository
    ) {
        $this->artRepository = $artRepository;
        $this->pageRepository = $pageRepository;
    }

    public function homepage()
    {
        return view('pages.home', [
            'meta' => $this->getMetadata('home', false),
            'featuredImages' => TwillAppSettings::getGroupDataForSectionAndName('home','page')->children,
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
                'title'         => $page->meta_title,
                'description'   => $page->description,
                'thumbnail'     => $page->socialImage('thumbnail'),
            ],
        ]);
    }
}
