<?php
/**
 * Class file for SOEmailValidationTypeValidateEmailFastNoNames
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationTypeValidateEmailFastNoNames
 * @date 08/07/2012
 */
class SOEmailValidationTypeValidateEmailFastNoNames extends SOEmailValidationWsdlClass
{
	/**
	 * The EmailAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailAddress;
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
	 * @param string EmailAddress
	 * @param string LicenseKey
	 * @return SOEmailValidationTypeValidateEmailFastNoNames
	 */
	public function __construct($_EmailAddress = null,$_LicenseKey = null)
	{
		parent::__construct(array('EmailAddress'=>$_EmailAddress,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set EmailAddress
	 * @param string EmailAddress
	 * @return string
	 */
	public function setEmailAddress($_EmailAddress)
	{
		return ($this->EmailAddress = $_EmailAddress);
	}
	/**
	 * Get EmailAddress
	 * @return string
	 */
	public function getEmailAddress()
	{
		return $this->EmailAddress;
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