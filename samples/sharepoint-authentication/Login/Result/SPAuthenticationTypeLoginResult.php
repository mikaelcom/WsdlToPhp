<?php
/**
 * Class file for SPAuthenticationTypeLoginResult
 * @date 06/07/2012
 */
/**
 * Class SPAuthenticationTypeLoginResult
 * @date 06/07/2012
 */
class SPAuthenticationTypeLoginResult extends SPAuthenticationWsdlClass
{
	/**
	 * The CookieName
	 * @var string
	 */
	public $CookieName;
	/**
	 * The ErrorCode
	 * @var LoginErrorCode
	 */
	public $ErrorCode;
	/**
	 * The TimeoutSeconds
	 * @var int
	 */
	public $TimeoutSeconds;
	/**
	 * Constructor
	 * @param string CookieName
	 * @param LoginErrorCode ErrorCode
	 * @param int TimeoutSeconds
	 * @return SPAuthenticationTypeLoginResult
	 */
	public function __construct($_CookieName = null,$_ErrorCode = null,$_TimeoutSeconds = null)
	{
		parent::__construct(array('CookieName'=>$_CookieName,'ErrorCode'=>$_ErrorCode,'TimeoutSeconds'=>$_TimeoutSeconds));
	}
	/**
	 * Set CookieName
	 * @param string CookieName
	 * @return string
	 */
	public function setCookieName($_CookieName)
	{
		return ($this->CookieName = $_CookieName);
	}
	/**
	 * Get CookieName
	 * @return string
	 */
	public function getCookieName()
	{
		return $this->CookieName;
	}
	/**
	 * Set ErrorCode
	 * @param LoginErrorCode ErrorCode
	 * @return LoginErrorCode
	 */
	public function setErrorCode($_ErrorCode)
	{
		return ($this->ErrorCode = $_ErrorCode);
	}
	/**
	 * Get ErrorCode
	 * @return LoginErrorCode
	 */
	public function getErrorCode()
	{
		return $this->ErrorCode;
	}
	/**
	 * Set TimeoutSeconds
	 * @param int TimeoutSeconds
	 * @return int
	 */
	public function setTimeoutSeconds($_TimeoutSeconds)
	{
		return ($this->TimeoutSeconds = $_TimeoutSeconds);
	}
	/**
	 * Get TimeoutSeconds
	 * @return int
	 */
	public function getTimeoutSeconds()
	{
		return $this->TimeoutSeconds;
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