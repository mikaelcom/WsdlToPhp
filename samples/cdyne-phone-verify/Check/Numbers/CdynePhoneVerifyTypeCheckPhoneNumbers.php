<?php
/**
 * Class file for CdynePhoneVerifyTypeCheckPhoneNumbers
 * @date 03/07/2012
 */
/**
 * Class CdynePhoneVerifyTypeCheckPhoneNumbers
 * @date 03/07/2012
 */
class CdynePhoneVerifyTypeCheckPhoneNumbers extends CdynePhoneVerifyWsdlClass
{
	/**
	 * The PhoneNumbers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdynePhoneVerifyTypeArrayOfString
	 */
	public $PhoneNumbers;
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
	 * @param CdynePhoneVerifyTypeArrayOfString PhoneNumbers
	 * @param string LicenseKey
	 * @return CdynePhoneVerifyTypeCheckPhoneNumbers
	 */
	public function __construct($_PhoneNumbers = null,$_LicenseKey = null)
	{
		parent::__construct(array('PhoneNumbers'=>new CdynePhoneVerifyTypeArrayOfString($_PhoneNumbers),'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set PhoneNumbers
	 * @param ArrayOfString PhoneNumbers
	 * @return ArrayOfString
	 */
	public function setPhoneNumbers($_PhoneNumbers)
	{
		return ($this->PhoneNumbers = $_PhoneNumbers);
	}
	/**
	 * Get PhoneNumbers
	 * @return CdynePhoneVerifyTypeArrayOfString
	 */
	public function getPhoneNumbers()
	{
		return $this->PhoneNumbers;
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