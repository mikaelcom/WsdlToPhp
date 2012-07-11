<?php
/**
 * Class file for SOFastWeatherTypeGetWeatherByStationID
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetWeatherByStationID
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetWeatherByStationID extends SOFastWeatherWsdlClass
{
	/**
	 * The StationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StationID;
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
	 * @param string StationID
	 * @param string LicenseKey
	 * @return SOFastWeatherTypeGetWeatherByStationID
	 */
	public function __construct($_StationID = null,$_LicenseKey = null)
	{
		parent::__construct(array('StationID'=>$_StationID,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set StationID
	 * @param string StationID
	 * @return string
	 */
	public function setStationID($_StationID)
	{
		return ($this->StationID = $_StationID);
	}
	/**
	 * Get StationID
	 * @return string
	 */
	public function getStationID()
	{
		return $this->StationID;
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