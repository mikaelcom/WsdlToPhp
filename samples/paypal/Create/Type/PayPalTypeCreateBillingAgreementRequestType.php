<?php
/**
 * Class file for PayPalTypeCreateBillingAgreementRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreateBillingAgreementRequestType
 * @date 14/07/2012
 */
class PayPalTypeCreateBillingAgreementRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The Token
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeExpressCheckoutTokenType
	 */
	public $Token;
	/**
	 * Constructor
	 * @param PayPalTypeExpressCheckoutTokenType Token
	 * @return PayPalTypeCreateBillingAgreementRequestType
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