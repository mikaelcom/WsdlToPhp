<?php
/**
 * Class file for PayPalTypeDoMobileCheckoutPaymentRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoMobileCheckoutPaymentRequestType
 * @date 14/07/2012
 */
class PayPalTypeDoMobileCheckoutPaymentRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The Token
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : A timestamped token, the value of which was returned by SetMobileCheckoutResponse. RequiredCharacter length and limitations: 20 single-byte characters
	 * @var string
	 */
	public $Token;
	/**
	 * Constructor
	 * @param string Token
	 * @return PayPalTypeDoMobileCheckoutPaymentRequestType
	 */
	public function __construct($_Token)
	{
		PayPalWsdlClass::__construct(array('Token'=>$_Token));
	}
	/**
	 * Set Token
	 * @param string Token
	 * @return string
	 */
	public function setToken($_Token)
	{
		return ($this->Token = $_Token);
	}
	/**
	 * Get Token
	 * @return string
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