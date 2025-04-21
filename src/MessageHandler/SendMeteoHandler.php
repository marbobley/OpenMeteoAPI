<?php

namespace App\MessageHandler;

use App\Message\SendMeteo;
use App\Class\Cities;
use App\Service\BlueService;
use App\Service\CityService;
use App\Service\ServiceOpenMeteo;
use App\Service\SerializerJsonService;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class SendMeteoHandler
{
    private CityService $cityServer ;
    private SerializerJsonService $serializerJson ;

    public function __construct(
        private CityService $cityService,
        private BlueService $blueService,
        private ServiceOpenMeteo $meteoService

    )
    {
        
    }

    public function __invoke(SendMeteo $message): void
    {
        $cities = $this->cityService->getCities();
        $city_1 = $cities->cities[array_rand( $cities->cities)];

        $latitude = $city_1->latitude;
        $longitude = $city_1->longitude;

        $weather = $this->meteoService->GetMeteoNow($latitude,$longitude);
        //$weather = $serviceOpenMeteo->getMeteoTest();
        $message = sprintf('Ville de %s : Heure : %s Temperature %s %s Humidité %s %s', 
        $city_1->label, 
        $weather->current->time, 
        $weather->current->temperature_2m , 
        $weather->currentUnits->temperature_2m,
        $weather->current->relativeHumidity_2m,
        $weather->currentUnits->relativeHumidity_2m
    );
    
        $this->blueService->SendMessage($message);    

    }
}
