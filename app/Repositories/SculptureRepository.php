<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Sculpture;

class SculptureRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias;

    public function __construct(Sculpture $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        $news = $this->model->published()->orderBy('position')->latest();

        return $news->get();
    }
}
