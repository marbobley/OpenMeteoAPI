<?php
namespace App\Class;
use Symfony\Component\Serializer\Annotation\SerializedName;

class Current
{
	public ?string $time;
	public ?int $interval;
	public ?float $temperature_2m;

    #[SerializedName('relative_humidity_2m')]
	public ?int $relativeHumidity_2m;
    #[SerializedName('apparent_temperature')]
	public ?float $apparentTemperature;
    #[SerializedName('is_day')]
	public ?int $isDay;
	public ?float $precipitation;
	public ?float $rain;
	public ?float $showers;
	public ?int $snowfall;
    #[SerializedName('weather_code')]
	public ?int $weatherCode;
    #[SerializedName('cloud_cover')]
	public ?int $cloudCover;
    #[SerializedName('pressure_msl')]
	public ?float $pressureMsl;
    #[SerializedName('surface_pressure')]
	public ?float $surfacePressure;
    #[SerializedName('wind_speed_10m')]
	public ?float $windSpeed_10m;
    #[SerializedName('wind_direction_10m')]
	public ?int $windDirection_10m;
    #[SerializedName('wind_gusts_10m')]
	public ?float $windGusts_10m;

	public function __construct(
		?string $time,
		?int $interval,
		?float $temperature_2m,
		?int $relativeHumidity_2m,
		?float $apparentTemperature,
		?int $isDay,
		?float $precipitation,
		?float $rain,
		?float $showers,
		?float $snowfall,
		?int $weatherCode,
		?int $cloudCover,
		?float $pressureMsl,
		?float $surfacePressure,
		?float $windSpeed_10m,
		?int $windDirection_10m,
		?float $windGusts_10m
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
