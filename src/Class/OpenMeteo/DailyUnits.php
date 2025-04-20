<?php
namespace App\Class\OpenMeteo;
use Symfony\Component\Serializer\Annotation\SerializedName;

class DailyUnits
{
	public ?string $time;
    #[SerializedName('weather_code')]
	public ?string $weatherCode;
    #[SerializedName('temperature_2m_max')]
	public ?string $temperature_2mMax;
    #[SerializedName('temperature_2m_min')]
	public ?string $temperature_2mMin;
    #[SerializedName('apparent_temperature_max')]
	public ?string $apparentTemperatureMax;
    #[SerializedName('apparent_temperature_min')]
	public ?string $apparentTemperatureMin;
	public ?string $sunrise;
	public ?string $sunset;
    #[SerializedName('daylight_duration')]
	public ?string $daylightDuration;
    #[SerializedName('sunshine_duration')]
	public ?string $sunshineDuration;
    #[SerializedName('uv_index_max')]
	public ?string $uvIndexMax;
    #[SerializedName('uv_index_clear_sky_max')]
	public ?string $uvIndexClearSkyMax;
    #[SerializedName('rain_sum')]
	public ?string $rainSum;
    #[SerializedName('showers_sum')]
	public ?string $showersSum;
    #[SerializedName('snowfall_sum')]
	public ?string $snowfallSum;
    #[SerializedName('precipitation_sum')]
	public ?string $precipitationSum;
    #[SerializedName('precipitation_hours')]
	public ?string $precipitationHours;
    #[SerializedName('precipitation_probability_max')]
	public ?string $precipitationProbabilityMax;
    #[SerializedName('wind_speed_10m_max')]
	public ?string $windSpeed_10mMax;
    #[SerializedName('wind_gusts_10m_max')]
	public ?string $windGusts_10mMax;
    #[SerializedName('wind_direction_10m_dominant')]
	public ?string $windDirection_10mDominant;
    #[SerializedName('shortwave_radiation_sum')]
	public ?string $shortwaveRadiationSum;
    #[SerializedName('et0_fao_evapotranspiration')]
	public ?string $et0FaoEvapotranspiration;

	public function __construct(
		?string $time,
		?string $weatherCode,
		?string $temperature_2mMax,
		?string $temperature_2mMin,
		?string $apparentTemperatureMax,
		?string $apparentTemperatureMin,
		?string $sunrise,
		?string $sunset,
		?string $daylightDuration,
		?string $sunshineDuration,
		?string $uvIndexMax,
		?string $uvIndexClearSkyMax,
		?string $rainSum,
		?string $showersSum,
		?string $snowfallSum,
		?string $precipitationSum,
		?string $precipitationHours,
		?string $precipitationProbabilityMax,
		?string $windSpeed_10mMax,
		?string $windGusts_10mMax,
		?string $windDirection_10mDominant,
		?string $shortwaveRadiationSum,
		?string $et0FaoEvapotranspiration
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
