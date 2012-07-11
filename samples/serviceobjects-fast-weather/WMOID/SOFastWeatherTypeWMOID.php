<?php
/**
 * Class file for SOFastWeatherTypeWMOID
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeWMOID
 * @date 08/07/2012
 */
class SOFastWeatherTypeWMOID extends SOFastWeatherWsdlClass
{
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The Region
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Region;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * The WMOID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WMOID;
	/**
	 * Constructor
	 * @param string City
	 * @param string Region
	 * @param string Country
	 * @param string WMOID
	 * @return SOFastWeatherTypeWMOID
	 */
	public function __construct($_City = null,$_Region = null,$_Country = null,$_WMOID = null)
	{
		parent::__construct(array('City'=>$_City,'Region'=>$_Region,'Country'=>$_Country,'WMOID'=>$_WMOID));
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
	 * Set Region
	 * @param string Region
	 * @return string
	 */
	public function setRegion($_Region)
	{
		return ($this->Region = $_Region);
	}
	/**
	 * Get Region
	 * @return string
	 */
	public function getRegion()
	{
		return $this->Region;
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
	 * Set WMOID
	 * @param string WMOID
	 * @return string
	 */
	public function setWMOID($_WMOID)
	{
		return ($this->WMOID = $_WMOID);
	}
	/**
	 * Get WMOID
	 * @return string
	 */
	public function getWMOID()
	{
		return $this->WMOID;
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