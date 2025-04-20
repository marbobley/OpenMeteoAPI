<?php
namespace App\Class\OpenMeteo;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Daily
{
	/** @var string[] */
	public ?array $time;
	/** @var int[] */
    #[SerializedName('weather_code')]
	public ?array $weatherCode;
	/** @var float[] */
    #[SerializedName('temperature_2m_max')]
	public ?array $temperature_2mMax;
	/** @var float[] */
    #[SerializedName('temperature_2m_min')]
	public ?array $temperature_2mMin;
	/** @var int[] */
    #[SerializedName('apparent_temperature_max')]
	public ?array $apparentTemperatureMax;
	/** @var float[] */
    #[SerializedName('apparent_temperature_min')]
	public ?array $apparentTemperatureMin;
	/** @var string[] */
	public ?array $sunrise;
	/** @var string[] */
	public ?array $sunset;
	/** @var float[] */
    #[SerializedName('daylight_duration')]
	public ?array $daylightDuration;
	/** @var int[] */
    #[SerializedName('sunshine_duration')]
	public ?array $sunshineDuration;
	/** @var float[] */
    #[SerializedName('uv_index_max')]
	public ?array $uvIndexMax;
	/** @var float[] */
    #[SerializedName('uv_index_clear_sky_max')]
	public ?array $uvIndexClearSkyMax;
	/** @var int[] */
    #[SerializedName('rain_sum')]
	public ?array $rainSum;
	/** @var int[] */
    #[SerializedName('showers_sum')]
	public ?array $showersSum;
	/** @var int[] */
    #[SerializedName('snowfall_sum')]
	public ?array $snowfallSum;
	/** @var int[] */
    #[SerializedName('precipitation_sum')]
	public ?array $precipitationSum;
	/** @var int[] */
    #[SerializedName('precipitation_hours')]
	public ?array $precipitationHours;
	/** @var int[] */
    #[SerializedName('precipitation_probability_max')]
	public ?array $precipitationProbabilityMax;
	/** @var int[] */
    #[SerializedName('wind_speed_10m_max')]
	public ?array $windSpeed_10mMax;
	/** @var float[] */
    #[SerializedName('wind_gusts_10m_max')]
	public ?array $windGusts_10mMax;
	/** @var int[] */
    #[SerializedName('wind_direction_10m_dominant')]
	public ?array $windDirection_10mDominant;
	/** @var float[] */
    #[SerializedName('shortwave_radiation_sum')]
	public ?array $shortwaveRadiationSum;
	/** @var float[] */
    #[SerializedName('et0_fao_evapotranspiration')]
	public ?array $et0FaoEvapotranspiration;

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
		?array $time,
		?array $weatherCode,
		?array $temperature_2mMax,
		?array $temperature_2mMin,
		?array $apparentTemperatureMax,
		?array $apparentTemperatureMin,
		?array $sunrise,
		?array $sunset,
		?array $daylightDuration,
		?array $sunshineDuration,
		?array $uvIndexMax,
		?array $uvIndexClearSkyMax,
		?array $rainSum,
		?array $showersSum,
		?array $snowfallSum,
		?array $precipitationSum,
		?array $precipitationHours,
		?array $precipitationProbabilityMax,
		?array $windSpeed_10mMax,
		?array $windGusts_10mMax,
		?array $windDirection_10mDominant,
		?array $shortwaveRadiationSum,
		?array $et0FaoEvapotranspiration
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
