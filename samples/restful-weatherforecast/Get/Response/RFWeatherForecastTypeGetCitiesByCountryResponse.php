<?php
/**
 * Class file for RFWeatherForecastTypeGetCitiesByCountryResponse
 * @date 15/08/2012
 */
/**
 * Class RFWeatherForecastTypeGetCitiesByCountryResponse
 * @date 15/08/2012
 */
class RFWeatherForecastTypeGetCitiesByCountryResponse extends RFWeatherForecastWsdlClass
{
	/**
	 * The GetCitiesByCountryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFWeatherForecastTypeArrayOfstring
	 */
	public $GetCitiesByCountryResult;
	/**
	 * Constructor
	 * @param RFWeatherForecastTypeArrayOfstring GetCitiesByCountryResult
	 * @return RFWeatherForecastTypeGetCitiesByCountryResponse
	 */
	public function __construct($_GetCitiesByCountryResult = null)
	{
		parent::__construct(array('GetCitiesByCountryResult'=>new RFWeatherForecastTypeArrayOfstring($_GetCitiesByCountryResult)));
	}
	/**
	 * Set GetCitiesByCountryResult
	 * @param ArrayOfstring GetCitiesByCountryResult
	 * @return ArrayOfstring
	 */
	public function setGetCitiesByCountryResult($_GetCitiesByCountryResult)
	{
		return ($this->GetCitiesByCountryResult = $_GetCitiesByCountryResult);
	}
	/**
	 * Get GetCitiesByCountryResult
	 * @return RFWeatherForecastTypeArrayOfstring
	 */
	public function getGetCitiesByCountryResult()
	{
		return $this->GetCitiesByCountryResult;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>