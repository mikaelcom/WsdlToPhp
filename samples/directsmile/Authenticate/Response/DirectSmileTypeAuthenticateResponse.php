<?php
/**
 * Class file for DirectSmileTypeAuthenticateResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeAuthenticateResponse
 * @date 02/08/2012
 */
class DirectSmileTypeAuthenticateResponse extends DirectSmileWsdlClass
{
	/**
	 * The AuthenticateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AuthenticateResult;
	/**
	 * Constructor
	 * @param string AuthenticateResult
	 * @return DirectSmileTypeAuthenticateResponse
	 */
	public function __construct($_AuthenticateResult = null)
	{
		parent::__construct(array('AuthenticateResult'=>$_AuthenticateResult));
	}
	/**
	 * Set AuthenticateResult
	 * @param string AuthenticateResult
	 * @return string
	 */
	public function setAuthenticateResult($_AuthenticateResult)
	{
		return ($this->AuthenticateResult = $_AuthenticateResult);
	}
	/**
	 * Get AuthenticateResult
	 * @return string
	 */
	public function getAuthenticateResult()
	{
		return $this->AuthenticateResult;
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