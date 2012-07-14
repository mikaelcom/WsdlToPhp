<?php
/**
 * Class file for PayPalTypeInfoSharingDirectivesType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeInfoSharingDirectivesType
 * @date 14/07/2012
 */
class PayPalTypeInfoSharingDirectivesType extends PayPalWsdlClass
{
	/**
	 * The ReqBillingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If Billing Address should be returned in GetExpressCheckoutDetails response, this parameter should be set to yes here
	 * @var string
	 */
	public $ReqBillingAddress;
	/**
	 * Constructor
	 * @param string ReqBillingAddress
	 * @return PayPalTypeInfoSharingDirectivesType
	 */
	public function __construct($_ReqBillingAddress = null)
	{
		parent::__construct(array('ReqBillingAddress'=>$_ReqBillingAddress));
	}
	/**
	 * Set ReqBillingAddress
	 * @param string ReqBillingAddress
	 * @return string
	 */
	public function setReqBillingAddress($_ReqBillingAddress)
	{
		return ($this->ReqBillingAddress = $_ReqBillingAddress);
	}
	/**
	 * Get ReqBillingAddress
	 * @return string
	 */
	public function getReqBillingAddress()
	{
		return $this->ReqBillingAddress;
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