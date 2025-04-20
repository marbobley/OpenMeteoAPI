<?php 

namespace App\Service;

use App\Class\OpenMeteo\Weather;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Serializer\SerializerInterface;

class ServiceOpenMeteo{
    public function __construct(private SerializerInterface $serializer)
    {
        
    }

    private function prepareURLTest() : string 
    {
        return 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&daily=weather_code,temperature_2m_min,apparent_temperature_min&hourly=temperature_2m,relative_humidity_2m,showers&current=relative_humidity_2m,showers&timezone=Europe%2FLondon&forecast_days=1';
     //   return 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&daily=weather_code,temperature_2m_max,temperature_2m_min,apparent_temperature_max,apparent_temperature_min,sunrise,sunset,uv_index_max,uv_index_clear_sky_max,sunshine_duration,daylight_duration,rain_sum,showers_sum,snowfall_sum,precipitation_sum,precipitation_hours,precipitation_probability_max,wind_speed_10m_max,wind_gusts_10m_max,wind_direction_10m_dominant,shortwave_radiation_sum,et0_fao_evapotranspiration';
        //return 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&current=temperature_2m,relative_humidity_2m,apparent_temperature,is_day,precipitation,rain,showers,snowfall,weather_code,cloud_cover,pressure_msl,surface_pressure,wind_speed_10m,wind_direction_10m,wind_gusts_10m';
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