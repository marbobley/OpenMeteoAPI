<?php 

namespace App\Service;

use App\Class\Weather;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Serializer\SerializerInterface;

class ServiceOpenMeteo{
    public function __construct(private SerializerInterface $serializer)
    {
        
    }

    public function GetMeteo() :  Weather
    {
        $query24h = 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m,relative_humidity_2m,dew_point_2m,apparent_temperature,precipitation_probability,precipitation,rain,showers,snowfall,snow_depth&forecast_days=1';
        $query = 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m,relative_humidity_2m,dew_point_2m,apparent_temperature,precipitation_probability,precipitation,rain,showers,snowfall,snow_depth';
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $query
            
        );
        
        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        //$contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        //$content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]


        return $this->serializer->deserialize($response->getContent(), Weather::class, 'json');
    }
}