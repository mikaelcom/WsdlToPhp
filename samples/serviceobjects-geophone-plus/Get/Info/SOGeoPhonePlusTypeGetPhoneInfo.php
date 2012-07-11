<?php
/**
 * Class file for SOGeoPhonePlusTypeGetPhoneInfo
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhonePlusTypeGetPhoneInfo
 * @date 08/07/2012
 */
class SOGeoPhonePlusTypeGetPhoneInfo extends SOGeoPhonePlusWsdlClass
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
	 * The TestType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TestType;
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
	 * @param string TestType
	 * @param string LicenseKey
	 * @return SOGeoPhonePlusTypeGetPhoneInfo
	 */
	public function __construct($_PhoneNumber = null,$_TestType = null,$_LicenseKey = null)
	{
		parent::__construct(array('PhoneNumber'=>$_PhoneNumber,'TestType'=>$_TestType,'LicenseKey'=>$_LicenseKey));
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
	 * Set TestType
	 * @param string TestType
	 * @return string
	 */
	public function setTestType($_TestType)
	{
		return ($this->TestType = $_TestType);
	}
	/**
	 * Get TestType
	 * @return string
	 */
	public function getTestType()
	{
		return $this->TestType;
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