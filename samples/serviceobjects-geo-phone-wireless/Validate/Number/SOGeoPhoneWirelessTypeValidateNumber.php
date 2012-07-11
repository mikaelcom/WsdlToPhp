<?php
/**
 * Class file for SOGeoPhoneWirelessTypeValidateNumber
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneWirelessTypeValidateNumber
 * @date 08/07/2012
 */
class SOGeoPhoneWirelessTypeValidateNumber extends SOGeoPhoneWirelessWsdlClass
{
	/**
	 * The PhoneNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumber;
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
	 * @param string PhoneNumber
	 * @param string LicenseKey
	 * @return SOGeoPhoneWirelessTypeValidateNumber
	 */
	public function __construct($_PhoneNumber = null,$_LicenseKey = null)
	{
		parent::__construct(array('PhoneNumber'=>$_PhoneNumber,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set PhoneNumber
	 * @param string PhoneNumber
	 * @return string
	 */
	public function setPhoneNumber($_PhoneNumber)
	{
		return ($this->PhoneNumber = $_PhoneNumber);
	}
	/**
	 * Get PhoneNumber
	 * @return string
	 */
	public function getPhoneNumber()
	{
		return $this->PhoneNumber;
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