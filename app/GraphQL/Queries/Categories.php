<?php

namespace App\GraphQL\Queries;

use Webkul\Category\Models\Category;

class Categories
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        return Category::where('parent_id','!=','null')->get();
    }
}
