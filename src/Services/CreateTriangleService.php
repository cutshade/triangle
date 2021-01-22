<?php

namespace App\Services;

use App\Entity\Triangle;
use App\Repository\TriangleRepository;

class CreateTriangleService
{
    /** @TriangleRepository $triangleRepository */
    private $triangleRepository;

    public function __construct(TriangleRepository $triangleRepository)
    {
        $this->triangleRepository = $triangleRepository;
    }

    public function execute($a, $b, $c)
    {
        $triangle = New Triangle($a, $b, $c);

        $this->triangleRepository->create($triangle);

        return ['message'   =>  "Triangle created with parameters a={$a}, b={$b}, c={$c}"];
    }
}