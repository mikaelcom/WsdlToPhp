<?php
/**
 * Class file for PayPalTypePaymentDirectivesType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentDirectivesType
 * @date 14/07/2012
 */
class PayPalTypePaymentDirectivesType extends PayPalWsdlClass
{
	/**
	 * The PaymentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of the Payment is it Instant or Echeck or Any.
	 * @var PayPalTypeMerchantPullPaymentCodeType
	 */
	public $PaymentType;
	/**
	 * Constructor
	 * @param PayPalTypeMerchantPullPaymentCodeType PaymentType
	 * @return PayPalTypePaymentDirectivesType
	 */
	public function __construct($_PaymentType = null)
	{
		parent::__construct(array('PaymentType'=>$_PaymentType));
	}
	/**
	 * Set PaymentType
	 * @param MerchantPullPaymentCodeType PaymentType
	 * @return MerchantPullPaymentCodeType
	 */
	public function setPaymentType($_PaymentType)
	{
		return ($this->PaymentType = PayPalTypeMerchantPullPaymentCodeType::valueIsValid($_PaymentType)?$_PaymentType:null);
	}
	/**
	 * Get PaymentType
	 * @return PayPalTypeMerchantPullPaymentCodeType
	 */
	public function getPaymentType()
	{
		return $this->PaymentType;
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