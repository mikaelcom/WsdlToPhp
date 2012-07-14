<?php
/**
 * Class file for PayPalTypeUpdateRecurringPaymentsProfileReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUpdateRecurringPaymentsProfileReq
 * @date 14/07/2012
 */
class PayPalTypeUpdateRecurringPaymentsProfileReq extends PayPalWsdlClass
{
	/**
	 * The UpdateRecurringPaymentsProfileRequest
	 * @var PayPalTypeUpdateRecurringPaymentsProfileRequestType
	 */
	public $UpdateRecurringPaymentsProfileRequest;
	/**
	 * Constructor
	 * @param PayPalTypeUpdateRecurringPaymentsProfileRequestType UpdateRecurringPaymentsProfileRequest
	 * @return PayPalTypeUpdateRecurringPaymentsProfileReq
	 */
	public function __construct($_UpdateRecurringPaymentsProfileRequest = null)
	{
		parent::__construct(array('UpdateRecurringPaymentsProfileRequest'=>$_UpdateRecurringPaymentsProfileRequest));
	}
	/**
	 * Set UpdateRecurringPaymentsProfileRequest
	 * @param UpdateRecurringPaymentsProfileRequestType UpdateRecurringPaymentsProfileRequest
	 * @return UpdateRecurringPaymentsProfileRequestType
	 */
	public function setUpdateRecurringPaymentsProfileRequest($_UpdateRecurringPaymentsProfileRequest)
	{
		return ($this->UpdateRecurringPaymentsProfileRequest = $_UpdateRecurringPaymentsProfileRequest);
	}
	/**
	 * Get UpdateRecurringPaymentsProfileRequest
	 * @return PayPalTypeUpdateRecurringPaymentsProfileRequestType
	 */
	public function getUpdateRecurringPaymentsProfileRequest()
	{
		return $this->UpdateRecurringPaymentsProfileRequest;
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