<?php
/**
 * Class file for PayPalTypeUpdateRecurringPaymentsProfileRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUpdateRecurringPaymentsProfileRequestType
 * @date 14/07/2012
 */
class PayPalTypeUpdateRecurringPaymentsProfileRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The UpdateRecurringPaymentsProfileRequestDetails
	 * @var PayPalTypeUpdateRecurringPaymentsProfileRequestDetailsType
	 */
	public $UpdateRecurringPaymentsProfileRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeUpdateRecurringPaymentsProfileRequestDetailsType UpdateRecurringPaymentsProfileRequestDetails
	 * @return PayPalTypeUpdateRecurringPaymentsProfileRequestType
	 */
	public function __construct($_UpdateRecurringPaymentsProfileRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('UpdateRecurringPaymentsProfileRequestDetails'=>$_UpdateRecurringPaymentsProfileRequestDetails));
	}
	/**
	 * Set UpdateRecurringPaymentsProfileRequestDetails
	 * @param UpdateRecurringPaymentsProfileRequestDetailsType UpdateRecurringPaymentsProfileRequestDetails
	 * @return UpdateRecurringPaymentsProfileRequestDetailsType
	 */
	public function setUpdateRecurringPaymentsProfileRequestDetails($_UpdateRecurringPaymentsProfileRequestDetails)
	{
		return ($this->UpdateRecurringPaymentsProfileRequestDetails = $_UpdateRecurringPaymentsProfileRequestDetails);
	}
	/**
	 * Get UpdateRecurringPaymentsProfileRequestDetails
	 * @return PayPalTypeUpdateRecurringPaymentsProfileRequestDetailsType
	 */
	public function getUpdateRecurringPaymentsProfileRequestDetails()
	{
		return $this->UpdateRecurringPaymentsProfileRequestDetails;
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