<?php
/**
 * Class file for PayPalTypeGetAccessPermissionDetailsRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetAccessPermissionDetailsRequestType
 * @date 14/07/2012
 */
class PayPalTypeGetAccessPermissionDetailsRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The Token
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : A timestamped token, the value of which was returned by SetAuthFlowParam Response. Required Character length and limitations: 20 single-byte characters
	 * @var PayPalTypeAuthFlowTokenType
	 */
	public $Token;
	/**
	 * Constructor
	 * @param PayPalTypeAuthFlowTokenType Token
	 * @return PayPalTypeGetAccessPermissionDetailsRequestType
	 */
	public function __construct($_Token)
	{
		PayPalWsdlClass::__construct(array('Token'=>$_Token));
	}
	/**
	 * Set Token
	 * @param AuthFlowTokenType Token
	 * @return AuthFlowTokenType
	 */
	public function setToken($_Token)
	{
		return ($this->Token = PayPalTypeAuthFlowTokenType::valueIsValid($_Token)?$_Token:null);
	}
	/**
	 * Get Token
	 * @return PayPalTypeAuthFlowTokenType
	 */
	public function getToken()
	{
		return $this->Token;
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