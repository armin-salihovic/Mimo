<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\News;

class NewsRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleRevisions;

    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function allNews()
    {
        $news = $this->model->published()->orderBy('position')->latest();

        if($search = request('search')) {
            $news->where('title', 'like', '%' . $search . '%');
        }

        return $news->paginate(10);
    }
}
