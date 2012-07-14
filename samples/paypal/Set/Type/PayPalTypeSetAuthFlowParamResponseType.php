<?php
/**
 * Class file for PayPalTypeSetAuthFlowParamResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetAuthFlowParamResponseType
 * @date 14/07/2012
 */
class PayPalTypeSetAuthFlowParamResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The Token
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : A timestamped token by which you identify to PayPal that you are processing this user. The token expires after three hours. Character length and limitations: 20 single-byte characters
	 * @var PayPalTypeAuthFlowTokenType
	 */
	public $Token;
	/**
	 * Constructor
	 * @param PayPalTypeAuthFlowTokenType Token
	 * @return PayPalTypeSetAuthFlowParamResponseType
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