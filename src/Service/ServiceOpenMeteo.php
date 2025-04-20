<?php 

namespace App\Service;

use App\Class\Weather;
use DateTimeImmutable;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Serializer\SerializerInterface;

class ServiceOpenMeteo{
    public function __construct(private SerializerInterface $serializer)
    {
        
    }

    private function prepareURLTest() : string 
    {
        return 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&current=temperature_2m,relative_humidity_2m,apparent_temperature,is_day,precipitation,rain,showers,snowfall,weather_code,cloud_cover,pressure_msl,surface_pressure,wind_speed_10m,wind_direction_10m,wind_gusts_10m';
        //return 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m,relative_humidity_2m,dew_point_2m,apparent_temperature,precipitation_probability,precipitation,rain,showers,snowfall,snow_depth';
    }

    private function prepareURL (float $latitude, float $longitude) : string
    {
        $query24h = 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m,relative_humidity_2m,dew_point_2m,apparent_temperature,precipitation_probability,precipitation,rain,showers,snowfall,snow_depth&forecast_days=1';
        $query = 'https://api.open-meteo.com/v1/forecast?latitude=%s&longitude=%s&hourly=temperature_2m,relative_humidity_2m,dew_point_2m,apparent_temperature,precipitation_probability,precipitation,rain,showers,snowfall,snow_depth';
        
        return sprintf($query,$latitude ,$longitude);
    }


    public function getMeteoTest() : Weather
    {
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $this->prepareURLTest()            
        );

        return $this->serializer->deserialize($response->getContent(), Weather::class, 'json');
    }

    public function GetMeteo(float $latitude, float $longitude) :  Weather
    {
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $this->prepareURL($latitude, $longitude)            
        );

        return $this->serializer->deserialize($response->getContent(), Weather::class, 'json');
    }
}