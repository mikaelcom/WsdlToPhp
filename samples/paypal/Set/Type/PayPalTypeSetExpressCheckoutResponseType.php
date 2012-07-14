<?php
/**
 * Class file for PayPalTypeSetExpressCheckoutResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetExpressCheckoutResponseType
 * @date 14/07/2012
 */
class PayPalTypeSetExpressCheckoutResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The Token
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : A timestamped token by which you identify to PayPal that you are processing this payment with Express Checkout. The token expires after three hours. If you set Token in the SetExpressCheckoutRequest, the value of Token in the response is identical to the value in the request. Character length and limitations: 20 single-byte characters
	 * @var PayPalTypeExpressCheckoutTokenType
	 */
	public $Token;
	/**
	 * Constructor
	 * @param PayPalTypeExpressCheckoutTokenType Token
	 * @return PayPalTypeSetExpressCheckoutResponseType
	 */
	public function __construct($_Token = null)
	{
		PayPalWsdlClass::__construct(array('Token'=>$_Token));
	}
	/**
	 * Set Token
	 * @param ExpressCheckoutTokenType Token
	 * @return ExpressCheckoutTokenType
	 */
	public function setToken($_Token)
	{
		return ($this->Token = PayPalTypeExpressCheckoutTokenType::valueIsValid($_Token)?$_Token:null);
	}
	/**
	 * Get Token
	 * @return PayPalTypeExpressCheckoutTokenType
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