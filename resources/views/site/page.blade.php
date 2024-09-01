{{

view('pages.page', [
    'page' => $item,
    'meta' => [
        'title' => $item->meta_title,
        'description' => $item->description,
        'thumbnail' => null,
    ],
])

}}

