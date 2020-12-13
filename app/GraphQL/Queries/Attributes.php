<?php

namespace App\GraphQL\Queries;

use Webkul\Attribute\Models\Attribute;

class Attributes
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        return Attribute::all();

    }


}
