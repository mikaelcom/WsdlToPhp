<?php
/**
 * Class file for AmazonLSTypeVerifyProductSubscriptionByTokens
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeVerifyProductSubscriptionByTokens
 * @date 10/07/2012
 */
class AmazonLSTypeVerifyProductSubscriptionByTokens extends AmazonLSWsdlClass
{
	/**
	 * The UserToken
	 * @var string
	 */
	public $UserToken;
	/**
	 * The ProductToken
	 * @var string
	 */
	public $ProductToken;
	/**
	 * Constructor
	 * @param string UserToken
	 * @param string ProductToken
	 * @return AmazonLSTypeVerifyProductSubscriptionByTokens
	 */
	public function __construct($_UserToken = null,$_ProductToken = null)
	{
		parent::__construct(array('UserToken'=>$_UserToken,'ProductToken'=>$_ProductToken));
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
	 * Set ProductToken
	 * @param string ProductToken
	 * @return string
	 */
	public function setProductToken($_ProductToken)
	{
		return ($this->ProductToken = $_ProductToken);
	}
	/**
	 * Get ProductToken
	 * @return string
	 */
	public function getProductToken()
	{
		return $this->ProductToken;
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