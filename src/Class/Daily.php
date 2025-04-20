<?php
namespace App\Class;

class Daily
{
	/** @var string[] */
	public array $time;
	/** @var int[] */
	public array $weatherCode;
	/** @var float[] */
	public array $temperature_2mMax;
	/** @var float[] */
	public array $temperature_2mMin;
	/** @var int[] */
	public array $apparentTemperatureMax;
	/** @var float[] */
	public array $apparentTemperatureMin;
	/** @var string[] */
	public array $sunrise;
	/** @var string[] */
	public array $sunset;
	/** @var float[] */
	public array $daylightDuration;
	/** @var int[] */
	public array $sunshineDuration;
	/** @var float[] */
	public array $uvIndexMax;
	/** @var float[] */
	public array $uvIndexClearSkyMax;
	/** @var int[] */
	public array $rainSum;
	/** @var int[] */
	public array $showersSum;
	/** @var int[] */
	public array $snowfallSum;
	/** @var int[] */
	public array $precipitationSum;
	/** @var int[] */
	public array $precipitationHours;
	/** @var int[] */
	public array $precipitationProbabilityMax;
	/** @var int[] */
	public array $windSpeed_10mMax;
	/** @var float[] */
	public array $windGusts_10mMax;
	/** @var int[] */
	public array $windDirection_10mDominant;
	/** @var float[] */
	public array $shortwaveRadiationSum;
	/** @var float[] */
	public array $et0FaoEvapotranspiration;

	/**
	 * @param string[] $time
	 * @param int[] $weatherCode
	 * @param float[] $temperature_2mMax
	 * @param float[] $temperature_2mMin
	 * @param int[] $apparentTemperatureMax
	 * @param float[] $apparentTemperatureMin
	 * @param string[] $sunrise
	 * @param string[] $sunset
	 * @param float[] $daylightDuration
	 * @param int[] $sunshineDuration
	 * @param float[] $uvIndexMax
	 * @param float[] $uvIndexClearSkyMax
	 * @param int[] $rainSum
	 * @param int[] $showersSum
	 * @param int[] $snowfallSum
	 * @param int[] $precipitationSum
	 * @param int[] $precipitationHours
	 * @param int[] $precipitationProbabilityMax
	 * @param int[] $windSpeed_10mMax
	 * @param float[] $windGusts_10mMax
	 * @param int[] $windDirection_10mDominant
	 * @param float[] $shortwaveRadiationSum
	 * @param float[] $et0FaoEvapotranspiration
	 */
	public function __construct(
		array $time,
		array $weatherCode,
		array $temperature_2mMax,
		array $temperature_2mMin,
		array $apparentTemperatureMax,
		array $apparentTemperatureMin,
		array $sunrise,
		array $sunset,
		array $daylightDuration,
		array $sunshineDuration,
		array $uvIndexMax,
		array $uvIndexClearSkyMax,
		array $rainSum,
		array $showersSum,
		array $snowfallSum,
		array $precipitationSum,
		array $precipitationHours,
		array $precipitationProbabilityMax,
		array $windSpeed_10mMax,
		array $windGusts_10mMax,
		array $windDirection_10mDominant,
		array $shortwaveRadiationSum,
		array $et0FaoEvapotranspiration
	) {
		$this->time = $time;
		$this->weatherCode = $weatherCode;
		$this->temperature_2mMax = $temperature_2mMax;
		$this->temperature_2mMin = $temperature_2mMin;
		$this->apparentTemperatureMax = $apparentTemperatureMax;
		$this->apparentTemperatureMin = $apparentTemperatureMin;
		$this->sunrise = $sunrise;
		$this->sunset = $sunset;
		$this->daylightDuration = $daylightDuration;
		$this->sunshineDuration = $sunshineDuration;
		$this->uvIndexMax = $uvIndexMax;
		$this->uvIndexClearSkyMax = $uvIndexClearSkyMax;
		$this->rainSum = $rainSum;
		$this->showersSum = $showersSum;
		$this->snowfallSum = $snowfallSum;
		$this->precipitationSum = $precipitationSum;
		$this->precipitationHours = $precipitationHours;
		$this->precipitationProbabilityMax = $precipitationProbabilityMax;
		$this->windSpeed_10mMax = $windSpeed_10mMax;
		$this->windGusts_10mMax = $windGusts_10mMax;
		$this->windDirection_10mDominant = $windDirection_10mDominant;
		$this->shortwaveRadiationSum = $shortwaveRadiationSum;
		$this->et0FaoEvapotranspiration = $et0FaoEvapotranspiration;
	}
}
