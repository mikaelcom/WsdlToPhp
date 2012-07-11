<?php
/**
 * Class file for SOFastWeatherTypeGetWarningsByZip
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetWarningsByZip
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetWarningsByZip extends SOFastWeatherWsdlClass
{
	/**
	 * The Zip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Zip;
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
	 * @param string Zip
	 * @param string LicenseKey
	 * @return SOFastWeatherTypeGetWarningsByZip
	 */
	public function __construct($_Zip = null,$_LicenseKey = null)
	{
		parent::__construct(array('Zip'=>$_Zip,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set Zip
	 * @param string Zip
	 * @return string
	 */
	public function setZip($_Zip)
	{
		return ($this->Zip = $_Zip);
	}
	/**
	 * Get Zip
	 * @return string
	 */
	public function getZip()
	{
		return $this->Zip;
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