<?php
/**
 * Class file for PayPalTypeGetMobileStatusResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetMobileStatusResponseType
 * @date 14/07/2012
 */
class PayPalTypeGetMobileStatusResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The IsActivated
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Indicates whether the phone is activated for mobile payments
	 * @var integer
	 */
	public $IsActivated;
	/**
	 * The PaymentPending
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Indicates whether there is a payment pending from the phone
	 * @var integer
	 */
	public $PaymentPending;
	/**
	 * Constructor
	 * @param integer IsActivated
	 * @param integer PaymentPending
	 * @return PayPalTypeGetMobileStatusResponseType
	 */
	public function __construct($_IsActivated,$_PaymentPending)
	{
		PayPalWsdlClass::__construct(array('IsActivated'=>$_IsActivated,'PaymentPending'=>$_PaymentPending));
	}
	/**
	 * Set IsActivated
	 * @param integer IsActivated
	 * @return integer
	 */
	public function setIsActivated($_IsActivated)
	{
		return ($this->IsActivated = $_IsActivated);
	}
	/**
	 * Get IsActivated
	 * @return integer
	 */
	public function getIsActivated()
	{
		return $this->IsActivated;
	}
	/**
	 * Set PaymentPending
	 * @param integer PaymentPending
	 * @return integer
	 */
	public function setPaymentPending($_PaymentPending)
	{
		return ($this->PaymentPending = $_PaymentPending);
	}
	/**
	 * Get PaymentPending
	 * @return integer
	 */
	public function getPaymentPending()
	{
		return $this->PaymentPending;
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