<?php
/**
 * Class file for DirectSmileTypeAuthenticateDSMResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeAuthenticateDSMResponse
 * @date 02/08/2012
 */
class DirectSmileTypeAuthenticateDSMResponse extends DirectSmileWsdlClass
{
	/**
	 * The AuthenticateDSMResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AuthenticateDSMResult;
	/**
	 * Constructor
	 * @param string AuthenticateDSMResult
	 * @return DirectSmileTypeAuthenticateDSMResponse
	 */
	public function __construct($_AuthenticateDSMResult = null)
	{
		parent::__construct(array('AuthenticateDSMResult'=>$_AuthenticateDSMResult));
	}
	/**
	 * Set AuthenticateDSMResult
	 * @param string AuthenticateDSMResult
	 * @return string
	 */
	public function setAuthenticateDSMResult($_AuthenticateDSMResult)
	{
		return ($this->AuthenticateDSMResult = $_AuthenticateDSMResult);
	}
	/**
	 * Get AuthenticateDSMResult
	 * @return string
	 */
	public function getAuthenticateDSMResult()
	{
		return $this->AuthenticateDSMResult;
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