<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Architecture;

class ArchitectureRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleSlugs, HandleMedias, HandleRevisions;

    public function __construct(Architecture $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        $news = $this->model->published()->orderBy('position')->latest();

        if($search = request('search')) {
            $news->where('title', 'like', '%' . $search . '%');
        }

        return $news->get();
    }
}
