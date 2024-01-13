<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Design;

class DesignRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(Design $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        $news = $this->model->published()->orderBy('position')->latest();

        return $news->get();
    }
}
