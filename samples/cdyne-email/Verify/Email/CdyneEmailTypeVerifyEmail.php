<?php
/**
 * Class file for CdyneEmailTypeVerifyEmail
 * @date 02/07/2012
 */
/**
 * Class CdyneEmailTypeVerifyEmail
 * @date 02/07/2012
 */
class CdyneEmailTypeVerifyEmail extends CdyneEmailWsdlClass
{
	/**
	 * The email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $email;
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
	 * @param string email
	 * @param string LicenseKey
	 * @return CdyneEmailTypeVerifyEmail
	 */
	public function __construct($_email = null,$_LicenseKey = null)
	{
		parent::__construct(array('email'=>$_email,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
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