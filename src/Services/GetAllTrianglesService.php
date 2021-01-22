<?php


namespace App\Services;


use App\Entity\Triangle;
use App\Repository\TriangleRepository;

class GetAllTrianglesService
{
    /** @TriangleRepository $triangleRepository */
    private $triangleRepository;

    public function __construct(TriangleRepository $triangleRepository)
    {
        $this->triangleRepository = $triangleRepository;
    }

    public function execute()
    {
        $totalOpseg = 0;
        $totalPovrsina = 0;

        $triangles = $this->triangleRepository->findAll();

        foreach($triangles as $triangle)
        {
            $totalOpseg += $triangle->getOpseg();
            $totalPovrsina += $triangle->getPovrsina();
        }

        return [
            'triangles' => count($triangles),
            'ukupan_opseg'  => $totalOpseg,
            'ukupna_površina'   => $totalPovrsina
        ];
    }
}