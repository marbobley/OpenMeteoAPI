<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\ServiceOpenMeteo;

final class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(ServiceOpenMeteo $serviceOpenMeteo): JsonResponse
    {
        $weather = $serviceOpenMeteo->GetMeteo();
        
        return $this->json($weather);
    }
}
