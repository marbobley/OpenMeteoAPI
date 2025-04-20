<?php 

namespace App\Service;

use App\Class\OpenMeteo\Weather;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Serializer\SerializerInterface;

class ServiceOpenMeteo{
    public function __construct(private SerializerInterface $serializer)
    {
        
    }

    private function prepareURL (float $latitude, float $longitude) : string
    {
        $query = 'https://api.open-meteo.com/v1/forecast?latitude=%s&longitude=%s&hourly=temperature_2m,relative_humidity_2m,dew_point_2m,apparent_temperature,precipitation_probability,precipitation,rain,showers,snowfall,snow_depth';
        
        return sprintf($query,$latitude ,$longitude);
    }

    private function prepareURLForNow(float $latitude, float $longitude) : string
    {
       $query = 'https://api.open-meteo.com/v1/forecast?latitude=%s&longitude=%s';
    
       return sprintf($query,$latitude ,$longitude) . '&current=temperature_2m,relative_humidity_2m,apparent_temperature,is_day,precipitation,rain,showers,snowfall,cloud_cover,weather_code,pressure_msl,surface_pressure,wind_speed_10m,wind_direction_10m,wind_gusts_10m&timezone=Europe%2FLondon&forecast_days=1';
    }

    public function GetMeteoNow(float $latitude, float $longitude) :  Weather
    {
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $this->prepareURLForNow($latitude, $longitude)           
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