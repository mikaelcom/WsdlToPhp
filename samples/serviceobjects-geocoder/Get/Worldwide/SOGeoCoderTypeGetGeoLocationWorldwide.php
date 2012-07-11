<?php
/**
 * Class file for SOGeoCoderTypeGetGeoLocationWorldwide
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetGeoLocationWorldwide
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetGeoLocationWorldwide extends SOGeoCoderWsdlClass
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
	 * @param string Region
	 * @param string Country
	 * @param string LicenseKey
	 * @return SOGeoCoderTypeGetGeoLocationWorldwide
	 */
	public function __construct($_City = null,$_Region = null,$_Country = null,$_LicenseKey = null)
	{
		parent::__construct(array('City'=>$_City,'Region'=>$_Region,'Country'=>$_Country,'LicenseKey'=>$_LicenseKey));
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