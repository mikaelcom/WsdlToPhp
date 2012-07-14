<?php
/**
 * Class file for PayPalTypeCreateRecurringPaymentsProfileRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreateRecurringPaymentsProfileRequestType
 * @date 14/07/2012
 */
class PayPalTypeCreateRecurringPaymentsProfileRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The CreateRecurringPaymentsProfileRequestDetails
	 * @var PayPalTypeCreateRecurringPaymentsProfileRequestDetailsType
	 */
	public $CreateRecurringPaymentsProfileRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeCreateRecurringPaymentsProfileRequestDetailsType CreateRecurringPaymentsProfileRequestDetails
	 * @return PayPalTypeCreateRecurringPaymentsProfileRequestType
	 */
	public function __construct($_CreateRecurringPaymentsProfileRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('CreateRecurringPaymentsProfileRequestDetails'=>$_CreateRecurringPaymentsProfileRequestDetails));
	}
	/**
	 * Set CreateRecurringPaymentsProfileRequestDetails
	 * @param CreateRecurringPaymentsProfileRequestDetailsType CreateRecurringPaymentsProfileRequestDetails
	 * @return CreateRecurringPaymentsProfileRequestDetailsType
	 */
	public function setCreateRecurringPaymentsProfileRequestDetails($_CreateRecurringPaymentsProfileRequestDetails)
	{
		return ($this->CreateRecurringPaymentsProfileRequestDetails = $_CreateRecurringPaymentsProfileRequestDetails);
	}
	/**
	 * Get CreateRecurringPaymentsProfileRequestDetails
	 * @return PayPalTypeCreateRecurringPaymentsProfileRequestDetailsType
	 */
	public function getCreateRecurringPaymentsProfileRequestDetails()
	{
		return $this->CreateRecurringPaymentsProfileRequestDetails;
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