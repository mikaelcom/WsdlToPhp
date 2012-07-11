<?php
/**
 * Class file for SPAuthenticationTypeLoginResponse
 * @date 06/07/2012
 */
/**
 * Class SPAuthenticationTypeLoginResponse
 * @date 06/07/2012
 */
class SPAuthenticationTypeLoginResponse extends SPAuthenticationWsdlClass
{
	/**
	 * The LoginResult
	 * @var SPAuthenticationTypeLoginResult
	 */
	public $LoginResult;
	/**
	 * Constructor
	 * @param SPAuthenticationTypeLoginResult LoginResult
	 * @return SPAuthenticationTypeLoginResponse
	 */
	public function __construct($_LoginResult = null)
	{
		parent::__construct(array('LoginResult'=>$_LoginResult));
	}
	/**
	 * Set LoginResult
	 * @param LoginResult LoginResult
	 * @return LoginResult
	 */
	public function setLoginResult($_LoginResult)
	{
		return ($this->LoginResult = $_LoginResult);
	}
	/**
	 * Get LoginResult
	 * @return SPAuthenticationTypeLoginResult
	 */
	public function getLoginResult()
	{
		return $this->LoginResult;
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