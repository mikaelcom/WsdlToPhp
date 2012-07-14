<?php
/**
 * Class file for PayPalTypeGetBillingAgreementCustomerDetailsResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetBillingAgreementCustomerDetailsResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeGetBillingAgreementCustomerDetailsResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The PayerInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypePayerInfoType
	 */
	public $PayerInfo;
	/**
	 * The BillingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Customer's billing address. Optional If you have a credit card mapped in your PayPal account, PayPal returns the billing address of the credit billing address otherwise your primary address as billing address in GetBillingAgreementCustomerDetails.
	 * @var PayPalTypeAddressType
	 */
	public $BillingAddress;
	/**
	 * Constructor
	 * @param PayPalTypePayerInfoType PayerInfo
	 * @param PayPalTypeAddressType BillingAddress
	 * @return PayPalTypeGetBillingAgreementCustomerDetailsResponseDetailsType
	 */
	public function __construct($_PayerInfo,$_BillingAddress = null)
	{
		parent::__construct(array('PayerInfo'=>$_PayerInfo,'BillingAddress'=>$_BillingAddress));
	}
	/**
	 * Set PayerInfo
	 * @param PayerInfoType PayerInfo
	 * @return PayerInfoType
	 */
	public function setPayerInfo($_PayerInfo)
	{
		return ($this->PayerInfo = $_PayerInfo);
	}
	/**
	 * Get PayerInfo
	 * @return PayPalTypePayerInfoType
	 */
	public function getPayerInfo()
	{
		return $this->PayerInfo;
	}
	/**
	 * Set BillingAddress
	 * @param AddressType BillingAddress
	 * @return AddressType
	 */
	public function setBillingAddress($_BillingAddress)
	{
		return ($this->BillingAddress = $_BillingAddress);
	}
	/**
	 * Get BillingAddress
	 * @return PayPalTypeAddressType
	 */
	public function getBillingAddress()
	{
		return $this->BillingAddress;
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