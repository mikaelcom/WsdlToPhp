<?php
/**
 * Class file for DirectSmileTypeGetAvailableDhttListAuth
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableDhttListAuth
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableDhttListAuth extends DirectSmileWsdlClass
{
	/**
	 * The AuthenticationCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AuthenticationCode;
	/**
	 * Constructor
	 * @param string AuthenticationCode
	 * @return DirectSmileTypeGetAvailableDhttListAuth
	 */
	public function __construct($_AuthenticationCode = null)
	{
		parent::__construct(array('AuthenticationCode'=>$_AuthenticationCode));
	}
	/**
	 * Set AuthenticationCode
	 * @param string AuthenticationCode
	 * @return string
	 */
	public function setAuthenticationCode($_AuthenticationCode)
	{
		return ($this->AuthenticationCode = $_AuthenticationCode);
	}
	/**
	 * Get AuthenticationCode
	 * @return string
	 */
	public function getAuthenticationCode()
	{
		return $this->AuthenticationCode;
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