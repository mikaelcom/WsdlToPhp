<?php
/**
 * Class file for PayPalTypeManageRecurringPaymentsProfileStatusReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeManageRecurringPaymentsProfileStatusReq
 * @date 14/07/2012
 */
class PayPalTypeManageRecurringPaymentsProfileStatusReq extends PayPalWsdlClass
{
	/**
	 * The ManageRecurringPaymentsProfileStatusRequest
	 * @var PayPalTypeManageRecurringPaymentsProfileStatusRequestType
	 */
	public $ManageRecurringPaymentsProfileStatusRequest;
	/**
	 * Constructor
	 * @param PayPalTypeManageRecurringPaymentsProfileStatusRequestType ManageRecurringPaymentsProfileStatusRequest
	 * @return PayPalTypeManageRecurringPaymentsProfileStatusReq
	 */
	public function __construct($_ManageRecurringPaymentsProfileStatusRequest = null)
	{
		parent::__construct(array('ManageRecurringPaymentsProfileStatusRequest'=>$_ManageRecurringPaymentsProfileStatusRequest));
	}
	/**
	 * Set ManageRecurringPaymentsProfileStatusRequest
	 * @param ManageRecurringPaymentsProfileStatusRequestType ManageRecurringPaymentsProfileStatusRequest
	 * @return ManageRecurringPaymentsProfileStatusRequestType
	 */
	public function setManageRecurringPaymentsProfileStatusRequest($_ManageRecurringPaymentsProfileStatusRequest)
	{
		return ($this->ManageRecurringPaymentsProfileStatusRequest = $_ManageRecurringPaymentsProfileStatusRequest);
	}
	/**
	 * Get ManageRecurringPaymentsProfileStatusRequest
	 * @return PayPalTypeManageRecurringPaymentsProfileStatusRequestType
	 */
	public function getManageRecurringPaymentsProfileStatusRequest()
	{
		return $this->ManageRecurringPaymentsProfileStatusRequest;
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