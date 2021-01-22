<?php

namespace App\Services;

use App\Repository\TriangleRepository;

class TriangleService{
    private $triangleRepo;

    public function __construct(TriangleRepository $triangleRepo)
    {
        $this->triangleRepo = $triangleRepo;
    }

    public function execute($triangle)
    {
        $this->triangleRepo->create(triangle);
    }
}