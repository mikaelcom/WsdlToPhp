<?php
/**
 * Class file for PayPalTypeCreateRecurringPaymentsProfileRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreateRecurringPaymentsProfileRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeCreateRecurringPaymentsProfileRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The Token
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Billing Agreement token (required if Express Checkout)
	 * @var string
	 */
	public $Token;
	/**
	 * The CreditCard
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the credit card to be charged (required if Direct Payment)
	 * @var PayPalTypeCreditCardDetailsType
	 */
	public $CreditCard;
	/**
	 * The RecurringPaymentsProfileDetails
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Customer Information for this Recurring Payments
	 * @var PayPalTypeRecurringPaymentsProfileDetailsType
	 */
	public $RecurringPaymentsProfileDetails;
	/**
	 * The ScheduleDetails
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Schedule Information for this Recurring Payments
	 * @var PayPalTypeScheduleDetailsType
	 */
	public $ScheduleDetails;
	/**
	 * The PaymentDetailsItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Information about the Item Details.
	 * @var PayPalTypePaymentDetailsItemType
	 */
	public $PaymentDetailsItem;
	/**
	 * Constructor
	 * @param string Token
	 * @param PayPalTypeCreditCardDetailsType CreditCard
	 * @param PayPalTypeRecurringPaymentsProfileDetailsType RecurringPaymentsProfileDetails
	 * @param PayPalTypeScheduleDetailsType ScheduleDetails
	 * @param PayPalTypePaymentDetailsItemType PaymentDetailsItem
	 * @return PayPalTypeCreateRecurringPaymentsProfileRequestDetailsType
	 */
	public function __construct($_Token = null,$_CreditCard = null,$_RecurringPaymentsProfileDetails,$_ScheduleDetails,$_PaymentDetailsItem = null)
	{
		parent::__construct(array('Token'=>$_Token,'CreditCard'=>$_CreditCard,'RecurringPaymentsProfileDetails'=>$_RecurringPaymentsProfileDetails,'ScheduleDetails'=>$_ScheduleDetails,'PaymentDetailsItem'=>$_PaymentDetailsItem));
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
	 * Set CreditCard
	 * @param CreditCardDetailsType CreditCard
	 * @return CreditCardDetailsType
	 */
	public function setCreditCard($_CreditCard)
	{
		return ($this->CreditCard = $_CreditCard);
	}
	/**
	 * Get CreditCard
	 * @return PayPalTypeCreditCardDetailsType
	 */
	public function getCreditCard()
	{
		return $this->CreditCard;
	}
	/**
	 * Set RecurringPaymentsProfileDetails
	 * @param RecurringPaymentsProfileDetailsType RecurringPaymentsProfileDetails
	 * @return RecurringPaymentsProfileDetailsType
	 */
	public function setRecurringPaymentsProfileDetails($_RecurringPaymentsProfileDetails)
	{
		return ($this->RecurringPaymentsProfileDetails = $_RecurringPaymentsProfileDetails);
	}
	/**
	 * Get RecurringPaymentsProfileDetails
	 * @return PayPalTypeRecurringPaymentsProfileDetailsType
	 */
	public function getRecurringPaymentsProfileDetails()
	{
		return $this->RecurringPaymentsProfileDetails;
	}
	/**
	 * Set ScheduleDetails
	 * @param ScheduleDetailsType ScheduleDetails
	 * @return ScheduleDetailsType
	 */
	public function setScheduleDetails($_ScheduleDetails)
	{
		return ($this->ScheduleDetails = $_ScheduleDetails);
	}
	/**
	 * Get ScheduleDetails
	 * @return PayPalTypeScheduleDetailsType
	 */
	public function getScheduleDetails()
	{
		return $this->ScheduleDetails;
	}
	/**
	 * Set PaymentDetailsItem
	 * @param PaymentDetailsItemType PaymentDetailsItem
	 * @return PaymentDetailsItemType
	 */
	public function setPaymentDetailsItem($_PaymentDetailsItem)
	{
		return ($this->PaymentDetailsItem = $_PaymentDetailsItem);
	}
	/**
	 * Get PaymentDetailsItem
	 * @return PayPalTypePaymentDetailsItemType
	 */
	public function getPaymentDetailsItem()
	{
		return $this->PaymentDetailsItem;
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