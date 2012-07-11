<?php
/**
 * Class file for CdyneEmailTypeAdvancedVerifyEmail
 * @date 02/07/2012
 */
/**
 * Class CdyneEmailTypeAdvancedVerifyEmail
 * @date 02/07/2012
 */
class CdyneEmailTypeAdvancedVerifyEmail extends CdyneEmailWsdlClass
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
	 * The timeout
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $timeout;
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
	 * @param int timeout
	 * @param string LicenseKey
	 * @return CdyneEmailTypeAdvancedVerifyEmail
	 */
	public function __construct($_email = null,$_timeout,$_LicenseKey = null)
	{
		parent::__construct(array('email'=>$_email,'timeout'=>$_timeout,'LicenseKey'=>$_LicenseKey));
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
	 * Set timeout
	 * @param int timeout
	 * @return int
	 */
	public function setTimeout($_timeout)
	{
		return ($this->timeout = $_timeout);
	}
	/**
	 * Get timeout
	 * @return int
	 */
	public function getTimeout()
	{
		return $this->timeout;
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