<?php
namespace App\Class;
use App\Class\City;

class Cities
{
	/** @var City[] */
	public array $cities;

	/**
	 * @param City[] $cities
	 */
	public function __construct(array $cities)
	{
		$this->cities = $cities;
	}
} 