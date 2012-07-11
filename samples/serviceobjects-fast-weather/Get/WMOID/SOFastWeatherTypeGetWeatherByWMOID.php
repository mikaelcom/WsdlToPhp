<?php
/**
 * Class file for SOFastWeatherTypeGetWeatherByWMOID
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetWeatherByWMOID
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetWeatherByWMOID extends SOFastWeatherWsdlClass
{
	/**
	 * The WMOID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WMOID;
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
	 * @param string WMOID
	 * @param string LicenseKey
	 * @return SOFastWeatherTypeGetWeatherByWMOID
	 */
	public function __construct($_WMOID = null,$_LicenseKey = null)
	{
		parent::__construct(array('WMOID'=>$_WMOID,'LicenseKey'=>$_LicenseKey));
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