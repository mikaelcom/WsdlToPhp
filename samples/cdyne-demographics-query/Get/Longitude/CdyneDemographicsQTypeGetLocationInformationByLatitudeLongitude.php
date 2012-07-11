<?php
/**
 * Class file for CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitude
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitude
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitude extends CdyneDemographicsQWsdlClass
{
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Latitude;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Longitude;
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
	 * @param decimal Latitude
	 * @param decimal Longitude
	 * @param string LicenseKey
	 * @return CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitude
	 */
	public function __construct($_Latitude,$_Longitude,$_LicenseKey = null)
	{
		parent::__construct(array('Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set Latitude
	 * @param decimal Latitude
	 * @return decimal
	 */
	public function setLatitude($_Latitude)
	{
		return ($this->Latitude = $_Latitude);
	}
	/**
	 * Get Latitude
	 * @return decimal
	 */
	public function getLatitude()
	{
		return $this->Latitude;
	}
	/**
	 * Set Longitude
	 * @param decimal Longitude
	 * @return decimal
	 */
	public function setLongitude($_Longitude)
	{
		return ($this->Longitude = $_Longitude);
	}
	/**
	 * Get Longitude
	 * @return decimal
	 */
	public function getLongitude()
	{
		return $this->Longitude;
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