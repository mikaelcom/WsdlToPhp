<?php
/**
 * Class file for SOFastWeatherTypeGetWMOIDByCity
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetWMOIDByCity
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetWMOIDByCity extends SOFastWeatherWsdlClass
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
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param string City
	 * @param string LicenseKey
	 * @return SOFastWeatherTypeGetWMOIDByCity
	 */
	public function __construct($_City = null,$_LicenseKey = null)
	{
		parent::__construct(array('City'=>$_City,'LicenseKey'=>$_LicenseKey));
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
	 * Set LicenseKey
	 * @param string LicenseKey
	 * @return string
	 */
	public function setLicenseKey($_LicenseKey)
	{
		return ($this->LicenseKey = $_LicenseKey);
	}
	/**
	 * Get LicenseKey
	 * @return string
	 */
	public function getLicenseKey()
	{
		return $this->LicenseKey;
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