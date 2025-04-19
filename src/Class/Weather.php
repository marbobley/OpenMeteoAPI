<?php

class Weather
{
	public float $latitude;
	public float $longitude;
	public float $generationtimeMs;
	public int $utcOffsetSeconds;
	public string $timezone;
	public string $timezoneAbbreviation;
	public int $elevation;
	public HourlyUnits $hourlyUnits;
	public Hourly $hourly;

	public function __construct(
		float $latitude,
		float $longitude,
		float $generationtimeMs,
		int $utcOffsetSeconds,
		string $timezone,
		string $timezoneAbbreviation,
		int $elevation,
		HourlyUnits $hourlyUnits,
		Hourly $hourly
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
	}
}
