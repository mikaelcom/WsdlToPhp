<?php
/**
 * Class file for PayPalTypeIdentityTokenInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIdentityTokenInfoType
 * @date 14/07/2012
 */
class PayPalTypeIdentityTokenInfoType extends PayPalWsdlClass
{
	/**
	 * The AccessToken
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Identity Access token from merchant
	 * @var string
	 */
	public $AccessToken;
	/**
	 * Constructor
	 * @param string AccessToken
	 * @return PayPalTypeIdentityTokenInfoType
	 */
	public function __construct($_AccessToken)
	{
		parent::__construct(array('AccessToken'=>$_AccessToken));
	}
	/**
	 * Set AccessToken
	 * @param string AccessToken
	 * @return string
	 */
	public function setAccessToken($_AccessToken)
	{
		return ($this->AccessToken = $_AccessToken);
	}
	/**
	 * Get AccessToken
	 * @return string
	 */
	public function getAccessToken()
	{
		return $this->AccessToken;
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