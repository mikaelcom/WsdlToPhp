<?php
/**
 * Class file for RFWeatherForecastTypeGetCitiesByCountry
 * @date 15/08/2012
 */
/**
 * Class RFWeatherForecastTypeGetCitiesByCountry
 * @date 15/08/2012
 */
class RFWeatherForecastTypeGetCitiesByCountry extends RFWeatherForecastWsdlClass
{
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Country;
	/**
	 * Constructor
	 * @param string Country
	 * @return RFWeatherForecastTypeGetCitiesByCountry
	 */
	public function __construct($_Country = null)
	{
		parent::__construct(array('Country'=>$_Country));
	}
	/**
	 * Set Country
	 * @param string Country
	 * @return string
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->Country;
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