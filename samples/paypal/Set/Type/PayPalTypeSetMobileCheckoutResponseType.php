<?php
/**
 * Class file for PayPalTypeSetMobileCheckoutResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetMobileCheckoutResponseType
 * @date 14/07/2012
 */
class PayPalTypeSetMobileCheckoutResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The Token
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : A timestamped token by which you identify to PayPal that you are processing this payment with Mobile Checkout. The token expires after three hours. Character length and limitations: 20 single-byte characters
	 * @var string
	 */
	public $Token;
	/**
	 * Constructor
	 * @param string Token
	 * @return PayPalTypeSetMobileCheckoutResponseType
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