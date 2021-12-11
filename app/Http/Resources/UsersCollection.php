<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UsersCollection extends ResourceCollection
{
    public $collects = UsersResources::class;

    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            "data" => $this->collection
        ];
    }
}