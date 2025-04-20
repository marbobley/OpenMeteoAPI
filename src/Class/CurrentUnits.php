<?php
namespace App\Class;
use Symfony\Component\Serializer\Annotation\SerializedName;

class CurrentUnits
{
	public ?string $time;
	public ?string $interval;
	public ?string $temperature_2m;
    #[SerializedName('relative_humidity_2m')]
	public ?string $relativeHumidity_2m;
    #[SerializedName('apparent_temperature')]
	public ?string $apparentTemperature;
    #[SerializedName('is_day')]
	public ?string $isDay;
	public ?string $precipitation;
	public ?string $rain;
	public ?string $showers;
	public ?string $snowfall;
    #[SerializedName('weather_code')]
	public ?string $weatherCode;
    #[SerializedName('cloud_cover')]
	public ?string $cloudCover;
    #[SerializedName('pressure_msl')]
	public ?string $pressureMsl;
    #[SerializedName('surface_pressure')]
	public ?string $surfacePressure;
    #[SerializedName('wind_speed_10m')]
	public ?string $windSpeed_10m;
    #[SerializedName('wind_direction_10m')]
	public ?string $windDirection_10m;
    #[SerializedName('wind_gusts_10m')]
	public ?string $windGusts_10m;

	public function __construct(
		?string $time,
		?string $interval,
		?string $temperature_2m,
		?string $relativeHumidity_2m,
		?string $apparentTemperature,
		?string $isDay,
		?string $precipitation,
		?string $rain,
		?string $showers,
		?string $snowfall,
		?string $weatherCode,
		?string $cloudCover,
		?string $pressureMsl,
		?string $surfacePressure,
		?string $windSpeed_10m,
		?string $windDirection_10m,
		?string $windGusts_10m
	) {
		$this->time = $time;
		$this->interval = $interval;
		$this->temperature_2m = $temperature_2m;
		$this->relativeHumidity_2m = $relativeHumidity_2m;
		$this->apparentTemperature = $apparentTemperature;
		$this->isDay = $isDay;
		$this->precipitation = $precipitation;
		$this->rain = $rain;
		$this->showers = $showers;
		$this->snowfall = $snowfall;
		$this->weatherCode = $weatherCode;
		$this->cloudCover = $cloudCover;
		$this->pressureMsl = $pressureMsl;
		$this->surfacePressure = $surfacePressure;
		$this->windSpeed_10m = $windSpeed_10m;
		$this->windDirection_10m = $windDirection_10m;
		$this->windGusts_10m = $windGusts_10m;
	}
}
