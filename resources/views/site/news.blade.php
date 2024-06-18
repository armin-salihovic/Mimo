{{

view('pages.news.details', [
    'news' => $item,
    'meta' => [
        'title' => $item->title . ' | Emir Salihović Mimo',
        'description' => $item->description,
        'thumbnail' => $item->image('cover') . '&width=750',
    ]
])

}}
