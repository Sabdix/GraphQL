<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use GraphQL\GraphQL;

class SpecieQuery extends Query
{
    protected $attributes = [
        'name' => 'SpecieQuery',
        'description' => 'A query of a specie'
    ];

    public function type()
    {
        return GraphQL::type('specie');
    }

    public function args()
    {
        return [
            'q' => [
                'type' => Type::nonNull(Type::string())
            ]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        return [];
    }
}
