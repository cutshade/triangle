<?php

namespace App\Controller;

use App\Services\CreateTriangleService;
use App\Services\GetAllTrianglesService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController extends AbstractController
{
    /**
     * @Route("/triangle", methods={"POST"}, name="triangle-create")
     */
    public function createTriangle(CreateTriangleService $triangleService, Request $request): Response
    {
        $trokut = $triangleService->execute( $request->get('a'), $request->get('b'), $request->get('c'));

        return $this->json($trokut);
    }

    /**
     * @Route("/triangle", methods={"GET"}, name="triangle")
     */
    public function getTriangles(GetAllTrianglesService $triangleService): Response
    {
        $trokuti = $triangleService->execute();

        return $this->json($trokuti);
    }
}
