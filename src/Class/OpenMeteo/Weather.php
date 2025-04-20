<?php

namespace App\Class\OpenMeteo;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Weather
{
    #[SerializedName('latitude')]
	public float $latitude;
    #[SerializedName('longitude')]
	public float $longitude;
    #[SerializedName('generationtime_ms')]
	public float $generationtimeMs;
    #[SerializedName('utc_offset_seconds')]
	public int $utcOffsetSeconds;
	public string $timezone;
    #[SerializedName('timezone_abbreviation')]
	public string $timezoneAbbreviation;
	public float $elevation;

    //#[SerializedName('hourly_units')]
	public ?HourlyUnits $hourlyUnits;
	public ?Hourly $hourly;


    #[SerializedName('current_units')]
	public ?CurrentUnits $currentUnits;
	public ?Current $current;
    #[SerializedName('daily_units')]
	public ?DailyUnits $dailyUnits;
	public ?Daily $daily;

	public function __construct(
		float $latitude,
		float $longitude,
		float $generationtimeMs,
		int $utcOffsetSeconds,
		string $timezone,
		string $timezoneAbbreviation,
		float $elevation,
		?HourlyUnits $hourlyUnits,
		?Hourly $hourly,
		?CurrentUnits $currentUnits,
		?Current $current,
		?DailyUnits $dailyUnits,
		?Daily $daily
	) {
		$this->latitude = $latitude;
		$this->longitude = $longitude;
		$this->generationtimeMs = $generationtimeMs;
		$this->utcOffsetSeconds = $utcOffsetSeconds;
		$this->timezone = $timezone;
		$this->timezoneAbbreviation = $timezoneAbbreviation;
		$this->elevation = $elevation;
		$this->hourlyUnits = $hourlyUnits;
		$this->hourly = $hourly;
		$this->currentUnits = $currentUnits;
		$this->current = $current;
		$this->dailyUnits = $dailyUnits;
		$this->daily = $daily;
	}
}
