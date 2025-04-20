<?php 

namespace App\Service;

use App\Class\Weather;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Serializer\SerializerInterface;

class ServiceOpenMeteo{
    public function __construct(private SerializerInterface $serializer)
    {
        
    }

    private function prepareURL (float $latitude, float $longitude) : string
    {
        $query24h = 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m,relative_humidity_2m,dew_point_2m,apparent_temperature,precipitation_probability,precipitation,rain,showers,snowfall,snow_depth&forecast_days=1';
        $query = 'https://api.open-meteo.com/v1/forecast?latitude=%s&longitude=%s&hourly=temperature_2m,relative_humidity_2m,dew_point_2m,apparent_temperature,precipitation_probability,precipitation,rain,showers,snowfall,snow_depth';
        
        return sprintf($query,$latitude ,$longitude);
    }

    public function GetMeteo(float $latitude, float $longitude) :  Weather
    {
         $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $this->prepareURL($latitude, $longitude)            
        );
        
        //$statusCode = $response->getStatusCode();
        //$content = $response->toArray();

        return $this->serializer->deserialize($response->getContent(), Weather::class, 'json');
    }
}