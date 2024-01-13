<?php
$pages = 4;
$page = 1;
$nextPageEnabled = true;
$previousPageEnabled = true;

if(isset($_GET['page'])) {
    $page = (int)$_GET['page'];
}

if($page > 1 && $page < $pages) {
    $nextPage = $page + 1;
    $previousPage = $page - 1;
} elseif($page === $pages) {
    $nextPageEnabled = false;
} elseif($page === 1) {
    $previousPageEnabled = false;
}

$meta = [
    "title" => "Sculpture | Emir Salihović Mimo",
    "description" => "A variety of sculptures and three-dimensional works designed by Emir Salihović Mimo.",
    "thumbnail" => "https://cdn.mimo.ba/img/og-sculpture-thumbnail.jpg",
];

?>

<x-layout :meta="$meta" main-class="text-center">
    <x-title>Sculpture</x-title>
    <?php if($page === 1 || $page === null): ?>
    <x-sculpture-page-1 />
    <?php elseif($page === 2): ?>
    <x-sculpture-page-2 />
    <?php elseif($page === 3): ?>
    <x-sculpture-page-3 />
    <?php elseif($page === 4): ?>
    <x-sculpture-page-4 />
    <?php endif; ?>
    <div class="d-flex justify-content-center py-3 mb-2 pagination">
        <div>
            <?php if($previousPageEnabled): ?>
            <a href="{{ route('sculpture'). "?page=" . ($page - 1) }}" class="text-dark pagination-link" rel="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            <?php else: ?>
            <i class="fa fa-angle-left pagination-link" aria-hidden="true"></i>
            <?php endif ?>
            <?php for($i = 1; $i <= $pages; $i++): ?>
                <?php if($i === $page): ?>
            <span class="text-danger pagination-link" style="cursor:default;"><?= $i ?></span>
            <?php else: ?>
            <a class="text-dark pagination-link" href="{{ route('sculpture'). "?page=" . $i }}"><?= $i ?></a>
            <?php endif ?>
            <?php endfor; ?>
            <?php if($nextPageEnabled): ?>
            <a href="{{ route('sculpture'). "?page=" . ($page + 1) }}" class="text-dark pagination-link" rel="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <?php else: ?>
            <i class="fa fa-angle-right pagination-link" aria-hidden="true"></i>
            <?php endif ?>
        </div>
    </div>

    @push('meta')
        <link rel="stylesheet" href="{{ asset('css/sculpture1.css') }}">
    @endpush

</x-layout>
