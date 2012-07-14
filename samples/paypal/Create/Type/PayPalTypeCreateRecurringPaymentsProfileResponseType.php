<?php
/**
 * Class file for PayPalTypeCreateRecurringPaymentsProfileResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreateRecurringPaymentsProfileResponseType
 * @date 14/07/2012
 */
class PayPalTypeCreateRecurringPaymentsProfileResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The CreateRecurringPaymentsProfileResponseDetails
	 * @var PayPalTypeCreateRecurringPaymentsProfileResponseDetailsType
	 */
	public $CreateRecurringPaymentsProfileResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeCreateRecurringPaymentsProfileResponseDetailsType CreateRecurringPaymentsProfileResponseDetails
	 * @return PayPalTypeCreateRecurringPaymentsProfileResponseType
	 */
	public function __construct($_CreateRecurringPaymentsProfileResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('CreateRecurringPaymentsProfileResponseDetails'=>$_CreateRecurringPaymentsProfileResponseDetails));
	}
	/**
	 * Set CreateRecurringPaymentsProfileResponseDetails
	 * @param CreateRecurringPaymentsProfileResponseDetailsType CreateRecurringPaymentsProfileResponseDetails
	 * @return CreateRecurringPaymentsProfileResponseDetailsType
	 */
	public function setCreateRecurringPaymentsProfileResponseDetails($_CreateRecurringPaymentsProfileResponseDetails)
	{
		return ($this->CreateRecurringPaymentsProfileResponseDetails = $_CreateRecurringPaymentsProfileResponseDetails);
	}
	/**
	 * Get CreateRecurringPaymentsProfileResponseDetails
	 * @return PayPalTypeCreateRecurringPaymentsProfileResponseDetailsType
	 */
	public function getCreateRecurringPaymentsProfileResponseDetails()
	{
		return $this->CreateRecurringPaymentsProfileResponseDetails;
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