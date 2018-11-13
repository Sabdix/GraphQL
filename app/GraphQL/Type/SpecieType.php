<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class SpecieType extends BaseType
{
    protected $attributes = [
        'name' => 'SpecieType',
        'description' => 'A type of Specie'
    ];

    public function fields()
    {
        return [
            'scientificName' => [
                'type' => Type::string()
            ],
            'canonicalName' => [
                'type' => Type::string()
            ],
            'rank' => [
                'type' => Type::string()
            ],
            'kingdom' => [
                'type' => Type::string()
            ],
            'phylum' => [
                'type' => Type::string()
            ],
            'order' => [
                'type' => Type::string()
            ],
            'family' => [
                'type' => Type::string()
            ],
            'genus' => [
                'type' => Type::string()
            ],
            'class' => [
                'type' => Type::string()
            ],
            'observations' => [
                'type' => Type::listOf(Graphql::Type('observations'))
            ]
        ];
    }
}
