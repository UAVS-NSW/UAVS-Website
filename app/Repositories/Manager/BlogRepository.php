<?php

namespace App\Repositories\Manager;

use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Image;
use DB;

class BlogRepository extends BaseRepository implements RepositoryInterface
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    // You can add specific blog-related methods here if needed
}
