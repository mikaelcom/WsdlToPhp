<?php
/**
 * Class file for PayPalTypeCustomSecurityHeaderType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCustomSecurityHeaderType
 * Documentation : Custom Securiy Header.
 * @date 14/07/2012
 */
class PayPalTypeCustomSecurityHeaderType extends PayPalWsdlClass
{
	/**
	 * The eBayAuthToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $eBayAuthToken;
	/**
	 * The HardExpirationWarning
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $HardExpirationWarning;
	/**
	 * The Credentials
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeUserIdPasswordType
	 */
	public $Credentials;
	/**
	 * Constructor
	 * @param string eBayAuthToken
	 * @param string HardExpirationWarning
	 * @param PayPalTypeUserIdPasswordType Credentials
	 * @return PayPalTypeCustomSecurityHeaderType
	 */
	public function __construct($_eBayAuthToken = null,$_HardExpirationWarning = null,$_Credentials = null)
	{
		parent::__construct(array('eBayAuthToken'=>$_eBayAuthToken,'HardExpirationWarning'=>$_HardExpirationWarning,'Credentials'=>$_Credentials));
	}
	/**
	 * Set eBayAuthToken
	 * @param string eBayAuthToken
	 * @return string
	 */
	public function setEBayAuthToken($_eBayAuthToken)
	{
		return ($this->eBayAuthToken = $_eBayAuthToken);
	}
	/**
	 * Get eBayAuthToken
	 * @return string
	 */
	public function getEBayAuthToken()
	{
		return $this->eBayAuthToken;
	}
	/**
	 * Set HardExpirationWarning
	 * @param string HardExpirationWarning
	 * @return string
	 */
	public function setHardExpirationWarning($_HardExpirationWarning)
	{
		return ($this->HardExpirationWarning = $_HardExpirationWarning);
	}
	/**
	 * Get HardExpirationWarning
	 * @return string
	 */
	public function getHardExpirationWarning()
	{
		return $this->HardExpirationWarning;
	}
	/**
	 * Set Credentials
	 * @param UserIdPasswordType Credentials
	 * @return UserIdPasswordType
	 */
	public function setCredentials($_Credentials)
	{
		return ($this->Credentials = $_Credentials);
	}
	/**
	 * Get Credentials
	 * @return PayPalTypeUserIdPasswordType
	 */
	public function getCredentials()
	{
		return $this->Credentials;
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