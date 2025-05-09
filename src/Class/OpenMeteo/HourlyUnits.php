<?php
namespace App\Class\OpenMeteo;

use Symfony\Component\Serializer\Annotation\SerializedName;

class HourlyUnits
{
	public string $time;
	public string $temperature_2m;
    #[SerializedName('relative_humidity_2m')]
	public string $relativeHumidity_2m;
    #[SerializedName('dew_point_2m')]
	public string $dewPoint_2m;
    #[SerializedName('apparent_temperature')]
	public string $apparentTemperature;
    #[SerializedName('precipitation_probability')]
	public string $precipitationProbability;
	public string $precipitation;
	public string $rain;
	public string $showers;
	public string $snowfall;
    #[SerializedName('snow_depth')]
	public string $snowDepth;

	public function __construct(
		string $time,
		string $temperature_2m,
		string $relativeHumidity_2m,
		string $dewPoint_2m,
		string $apparentTemperature,
		string $precipitationProbability,
		string $precipitation,
		string $rain,
		string $showers,
		string $snowfall,
		string $snowDepth
	) {
		$this->time = $time;
		$this->temperature_2m = $temperature_2m;
		$this->relativeHumidity_2m = $relativeHumidity_2m;
		$this->dewPoint_2m = $dewPoint_2m;
		$this->apparentTemperature = $apparentTemperature;
		$this->precipitationProbability = $precipitationProbability;
		$this->precipitation = $precipitation;
		$this->rain = $rain;
		$this->showers = $showers;
		$this->snowfall = $snowfall;
		$this->snowDepth = $snowDepth;
	}
}
