<?php

class Hourly
{
	/** @var string[] */
	public array $time;
	/** @var (float|int)[] */
	public array $temperature_2m;
	/** @var int[] */
	public array $relativeHumidity_2m;
	/** @var (float|int)[] */
	public array $dewPoint_2m;
	/** @var (float|int)[] */
	public array $apparentTemperature;
	/** @var int[] */
	public array $precipitationProbability;
	/** @var (float|int)[] */
	public array $precipitation;
	/** @var (float|int)[] */
	public array $rain;
	/** @var int[] */
	public array $showers;
	/** @var int[] */
	public array $snowfall;
	/** @var int[] */
	public array $snowDepth;

	/**
	 * @param string[] $time
	 * @param (float|int)[] $temperature_2m
	 * @param int[] $relativeHumidity_2m
	 * @param (float|int)[] $dewPoint_2m
	 * @param (float|int)[] $apparentTemperature
	 * @param int[] $precipitationProbability
	 * @param (float|int)[] $precipitation
	 * @param (float|int)[] $rain
	 * @param int[] $showers
	 * @param int[] $snowfall
	 * @param int[] $snowDepth
	 */
	public function __construct(
		array $time,
		array $temperature_2m,
		array $relativeHumidity_2m,
		array $dewPoint_2m,
		array $apparentTemperature,
		array $precipitationProbability,
		array $precipitation,
		array $rain,
		array $showers,
		array $snowfall,
		array $snowDepth
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
