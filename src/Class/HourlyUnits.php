<?php

class HourlyUnits
{
	public string $time;
	public string $temperature_2m;
	public string $relativeHumidity_2m;
	public string $dewPoint_2m;
	public string $apparentTemperature;
	public string $precipitationProbability;
	public string $precipitation;
	public string $rain;
	public string $showers;
	public string $snowfall;
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
