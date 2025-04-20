<?php

namespace App\Controller;

use App\Service\BlueService;
use App\Service\CityService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\ServiceOpenMeteo;
use App\Service\ServiceRoundDate;
use DateInterval;
use DateTimeImmutable;

final class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(CityService $cityService, 
        ServiceOpenMeteo $serviceOpenMeteo, 
        BlueService $blueService
    ): JsonResponse
    {
        /*$cities = $cityService->getCities();
        $city_1 = $cities->cities[array_rand( $cities->cities)];

        $latitude = $city_1->latitude;
        $longitude = $city_1->longitude;*/

        //$weather = $serviceOpenMeteo->GetMeteo($latitude,$longitude);
        $weather = $serviceOpenMeteo->getMeteoTest();


        
        return $this->json($weather);
    }
}
