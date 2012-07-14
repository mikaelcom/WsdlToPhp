<?php
/**
 * Class file for PayPalTypeUpdateRecurringPaymentsProfileResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUpdateRecurringPaymentsProfileResponseType
 * @date 14/07/2012
 */
class PayPalTypeUpdateRecurringPaymentsProfileResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The UpdateRecurringPaymentsProfileResponseDetails
	 * @var PayPalTypeUpdateRecurringPaymentsProfileResponseDetailsType
	 */
	public $UpdateRecurringPaymentsProfileResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeUpdateRecurringPaymentsProfileResponseDetailsType UpdateRecurringPaymentsProfileResponseDetails
	 * @return PayPalTypeUpdateRecurringPaymentsProfileResponseType
	 */
	public function __construct($_UpdateRecurringPaymentsProfileResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('UpdateRecurringPaymentsProfileResponseDetails'=>$_UpdateRecurringPaymentsProfileResponseDetails));
	}
	/**
	 * Set UpdateRecurringPaymentsProfileResponseDetails
	 * @param UpdateRecurringPaymentsProfileResponseDetailsType UpdateRecurringPaymentsProfileResponseDetails
	 * @return UpdateRecurringPaymentsProfileResponseDetailsType
	 */
	public function setUpdateRecurringPaymentsProfileResponseDetails($_UpdateRecurringPaymentsProfileResponseDetails)
	{
		return ($this->UpdateRecurringPaymentsProfileResponseDetails = $_UpdateRecurringPaymentsProfileResponseDetails);
	}
	/**
	 * Get UpdateRecurringPaymentsProfileResponseDetails
	 * @return PayPalTypeUpdateRecurringPaymentsProfileResponseDetailsType
	 */
	public function getUpdateRecurringPaymentsProfileResponseDetails()
	{
		return $this->UpdateRecurringPaymentsProfileResponseDetails;
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