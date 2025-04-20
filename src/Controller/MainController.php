<?php

namespace App\Controller;

use App\Service\BlueService;
use App\Service\CityService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\ServiceOpenMeteo;

final class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(CityService $cityService, ServiceOpenMeteo $serviceOpenMeteo, BlueService $blueService): JsonResponse
    {
       /* $cities = $cityService->getCities();

        $city_1 = $cities->cities[array_rand( $cities->cities)];

        $latitude = $city_1->latitude;
        $longitude = $city_1->longitude;*/

        $weather = $serviceOpenMeteo->GetMeteoTest();
        $i = 0;

        $message = [];

        foreach($weather->hourly->time as $currentTime)
        {
            $message[] = $currentTime . ' : ' . $weather->hourly->temperature_2m[$i]  ;
            $i++;
        }

        //$blueService->SendMessage($message);
        
        return $this->json($weather);
    }
}
