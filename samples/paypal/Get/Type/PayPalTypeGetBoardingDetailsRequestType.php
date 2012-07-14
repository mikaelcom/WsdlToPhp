<?php
/**
 * Class file for PayPalTypeGetBoardingDetailsRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetBoardingDetailsRequestType
 * @date 14/07/2012
 */
class PayPalTypeGetBoardingDetailsRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The Token
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : A unique token returned by the EnterBoarding API call that identifies this boarding session. RequiredCharacter length and limitations: 64 alphanumeric characters. The token has the following format:OB-61characterstring
	 * @var PayPalTypeExpressCheckoutTokenType
	 */
	public $Token;
	/**
	 * Constructor
	 * @param PayPalTypeExpressCheckoutTokenType Token
	 * @return PayPalTypeGetBoardingDetailsRequestType
	 */
	public function __construct($_Token)
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