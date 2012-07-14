<?php
/**
 * Class file for PayPalTypeManageRecurringPaymentsProfileStatusResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeManageRecurringPaymentsProfileStatusResponseType
 * @date 14/07/2012
 */
class PayPalTypeManageRecurringPaymentsProfileStatusResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The ManageRecurringPaymentsProfileStatusResponseDetails
	 * @var PayPalTypeManageRecurringPaymentsProfileStatusResponseDetailsType
	 */
	public $ManageRecurringPaymentsProfileStatusResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeManageRecurringPaymentsProfileStatusResponseDetailsType ManageRecurringPaymentsProfileStatusResponseDetails
	 * @return PayPalTypeManageRecurringPaymentsProfileStatusResponseType
	 */
	public function __construct($_ManageRecurringPaymentsProfileStatusResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('ManageRecurringPaymentsProfileStatusResponseDetails'=>$_ManageRecurringPaymentsProfileStatusResponseDetails));
	}
	/**
	 * Set ManageRecurringPaymentsProfileStatusResponseDetails
	 * @param ManageRecurringPaymentsProfileStatusResponseDetailsType ManageRecurringPaymentsProfileStatusResponseDetails
	 * @return ManageRecurringPaymentsProfileStatusResponseDetailsType
	 */
	public function setManageRecurringPaymentsProfileStatusResponseDetails($_ManageRecurringPaymentsProfileStatusResponseDetails)
	{
		return ($this->ManageRecurringPaymentsProfileStatusResponseDetails = $_ManageRecurringPaymentsProfileStatusResponseDetails);
	}
	/**
	 * Get ManageRecurringPaymentsProfileStatusResponseDetails
	 * @return PayPalTypeManageRecurringPaymentsProfileStatusResponseDetailsType
	 */
	public function getManageRecurringPaymentsProfileStatusResponseDetails()
	{
		return $this->ManageRecurringPaymentsProfileStatusResponseDetails;
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