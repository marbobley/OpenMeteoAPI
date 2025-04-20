<?php
namespace App\Class;

class DailyUnits
{
	public string $time;
	public string $weatherCode;
	public string $temperature_2mMax;
	public string $temperature_2mMin;
	public string $apparentTemperatureMax;
	public string $apparentTemperatureMin;
	public string $sunrise;
	public string $sunset;
	public string $daylightDuration;
	public string $sunshineDuration;
	public string $uvIndexMax;
	public string $uvIndexClearSkyMax;
	public string $rainSum;
	public string $showersSum;
	public string $snowfallSum;
	public string $precipitationSum;
	public string $precipitationHours;
	public string $precipitationProbabilityMax;
	public string $windSpeed_10mMax;
	public string $windGusts_10mMax;
	public string $windDirection_10mDominant;
	public string $shortwaveRadiationSum;
	public string $et0FaoEvapotranspiration;

	public function __construct(
		string $time,
		string $weatherCode,
		string $temperature_2mMax,
		string $temperature_2mMin,
		string $apparentTemperatureMax,
		string $apparentTemperatureMin,
		string $sunrise,
		string $sunset,
		string $daylightDuration,
		string $sunshineDuration,
		string $uvIndexMax,
		string $uvIndexClearSkyMax,
		string $rainSum,
		string $showersSum,
		string $snowfallSum,
		string $precipitationSum,
		string $precipitationHours,
		string $precipitationProbabilityMax,
		string $windSpeed_10mMax,
		string $windGusts_10mMax,
		string $windDirection_10mDominant,
		string $shortwaveRadiationSum,
		string $et0FaoEvapotranspiration
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
