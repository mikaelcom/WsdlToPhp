<?php
/**
 * Class file for RFWeatherForecastTypeGetForecastByCity
 * @date 15/08/2012
 */
/**
 * Class RFWeatherForecastTypeGetForecastByCity
 * @date 15/08/2012
 */
class RFWeatherForecastTypeGetForecastByCity extends RFWeatherForecastWsdlClass
{
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $City;
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
	 * @param string City
	 * @param string Country
	 * @return RFWeatherForecastTypeGetForecastByCity
	 */
	public function __construct($_City = null,$_Country = null)
	{
		parent::__construct(array('City'=>$_City,'Country'=>$_Country));
	}
	/**
	 * Set City
	 * @param string City
	 * @return string
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
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