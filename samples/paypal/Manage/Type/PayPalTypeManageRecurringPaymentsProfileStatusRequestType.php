<?php
/**
 * Class file for PayPalTypeManageRecurringPaymentsProfileStatusRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeManageRecurringPaymentsProfileStatusRequestType
 * @date 14/07/2012
 */
class PayPalTypeManageRecurringPaymentsProfileStatusRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The ManageRecurringPaymentsProfileStatusRequestDetails
	 * @var PayPalTypeManageRecurringPaymentsProfileStatusRequestDetailsType
	 */
	public $ManageRecurringPaymentsProfileStatusRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeManageRecurringPaymentsProfileStatusRequestDetailsType ManageRecurringPaymentsProfileStatusRequestDetails
	 * @return PayPalTypeManageRecurringPaymentsProfileStatusRequestType
	 */
	public function __construct($_ManageRecurringPaymentsProfileStatusRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('ManageRecurringPaymentsProfileStatusRequestDetails'=>$_ManageRecurringPaymentsProfileStatusRequestDetails));
	}
	/**
	 * Set ManageRecurringPaymentsProfileStatusRequestDetails
	 * @param ManageRecurringPaymentsProfileStatusRequestDetailsType ManageRecurringPaymentsProfileStatusRequestDetails
	 * @return ManageRecurringPaymentsProfileStatusRequestDetailsType
	 */
	public function setManageRecurringPaymentsProfileStatusRequestDetails($_ManageRecurringPaymentsProfileStatusRequestDetails)
	{
		return ($this->ManageRecurringPaymentsProfileStatusRequestDetails = $_ManageRecurringPaymentsProfileStatusRequestDetails);
	}
	/**
	 * Get ManageRecurringPaymentsProfileStatusRequestDetails
	 * @return PayPalTypeManageRecurringPaymentsProfileStatusRequestDetailsType
	 */
	public function getManageRecurringPaymentsProfileStatusRequestDetails()
	{
		return $this->ManageRecurringPaymentsProfileStatusRequestDetails;
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