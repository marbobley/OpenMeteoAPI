<?php

namespace App\Controller;

use App\Service\BlueService;
use App\Service\CityService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\ServiceOpenMeteo;
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
        $cities = $cityService->getCities();
        $city_1 = $cities->cities[array_rand( $cities->cities)];

        $latitude = $city_1->latitude;
        $longitude = $city_1->longitude;

        $weather = $serviceOpenMeteo->GetMeteoNow($latitude,$longitude);
        //$weather = $serviceOpenMeteo->getMeteoTest();
        $message = sprintf('Ville de %s :Temperature %s %s Humidité %s %s', 
        ucwords($city_1->label), 
        $weather->current->temperature_2m , 
        $weather->currentUnits->temperature_2m,
        $weather->current->relativeHumidity_2m,
        $weather->currentUnits->relativeHumidity_2m
    );
    
        $blueService->SendMessage($message);    
        
        return $this->json($message);
    }
}
