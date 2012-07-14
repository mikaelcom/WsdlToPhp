<?php
/**
 * Class file for PayPalTypeCreateRecurringPaymentsProfileReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreateRecurringPaymentsProfileReq
 * @date 14/07/2012
 */
class PayPalTypeCreateRecurringPaymentsProfileReq extends PayPalWsdlClass
{
	/**
	 * The CreateRecurringPaymentsProfileRequest
	 * @var PayPalTypeCreateRecurringPaymentsProfileRequestType
	 */
	public $CreateRecurringPaymentsProfileRequest;
	/**
	 * Constructor
	 * @param PayPalTypeCreateRecurringPaymentsProfileRequestType CreateRecurringPaymentsProfileRequest
	 * @return PayPalTypeCreateRecurringPaymentsProfileReq
	 */
	public function __construct($_CreateRecurringPaymentsProfileRequest = null)
	{
		parent::__construct(array('CreateRecurringPaymentsProfileRequest'=>$_CreateRecurringPaymentsProfileRequest));
	}
	/**
	 * Set CreateRecurringPaymentsProfileRequest
	 * @param CreateRecurringPaymentsProfileRequestType CreateRecurringPaymentsProfileRequest
	 * @return CreateRecurringPaymentsProfileRequestType
	 */
	public function setCreateRecurringPaymentsProfileRequest($_CreateRecurringPaymentsProfileRequest)
	{
		return ($this->CreateRecurringPaymentsProfileRequest = $_CreateRecurringPaymentsProfileRequest);
	}
	/**
	 * Get CreateRecurringPaymentsProfileRequest
	 * @return PayPalTypeCreateRecurringPaymentsProfileRequestType
	 */
	public function getCreateRecurringPaymentsProfileRequest()
	{
		return $this->CreateRecurringPaymentsProfileRequest;
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