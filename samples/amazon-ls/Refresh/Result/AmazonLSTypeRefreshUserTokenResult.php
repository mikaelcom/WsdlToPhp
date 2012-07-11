<?php
/**
 * Class file for AmazonLSTypeRefreshUserTokenResult
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeRefreshUserTokenResult
 * @date 10/07/2012
 */
class AmazonLSTypeRefreshUserTokenResult extends AmazonLSWsdlClass
{
	/**
	 * The UserToken
	 * @var string
	 */
	public $UserToken;
	/**
	 * Constructor
	 * @param string UserToken
	 * @return AmazonLSTypeRefreshUserTokenResult
	 */
	public function __construct($_UserToken = null)
	{
		parent::__construct(array('UserToken'=>$_UserToken));
	}
	/**
	 * Set UserToken
	 * @param string UserToken
	 * @return string
	 */
	public function setUserToken($_UserToken)
	{
		return ($this->UserToken = $_UserToken);
	}
	/**
	 * Get UserToken
	 * @return string
	 */
	public function getUserToken()
	{
		return $this->UserToken;
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