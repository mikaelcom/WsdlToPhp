<?php
/**
 * Class file for PayPalTypeGetRecurringPaymentsProfileDetailsReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetRecurringPaymentsProfileDetailsReq
 * @date 14/07/2012
 */
class PayPalTypeGetRecurringPaymentsProfileDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetRecurringPaymentsProfileDetailsRequest
	 * @var PayPalTypeGetRecurringPaymentsProfileDetailsRequestType
	 */
	public $GetRecurringPaymentsProfileDetailsRequest;
	/**
	 * Constructor
	 * @param PayPalTypeGetRecurringPaymentsProfileDetailsRequestType GetRecurringPaymentsProfileDetailsRequest
	 * @return PayPalTypeGetRecurringPaymentsProfileDetailsReq
	 */
	public function __construct($_GetRecurringPaymentsProfileDetailsRequest = null)
	{
		parent::__construct(array('GetRecurringPaymentsProfileDetailsRequest'=>$_GetRecurringPaymentsProfileDetailsRequest));
	}
	/**
	 * Set GetRecurringPaymentsProfileDetailsRequest
	 * @param GetRecurringPaymentsProfileDetailsRequestType GetRecurringPaymentsProfileDetailsRequest
	 * @return GetRecurringPaymentsProfileDetailsRequestType
	 */
	public function setGetRecurringPaymentsProfileDetailsRequest($_GetRecurringPaymentsProfileDetailsRequest)
	{
		return ($this->GetRecurringPaymentsProfileDetailsRequest = $_GetRecurringPaymentsProfileDetailsRequest);
	}
	/**
	 * Get GetRecurringPaymentsProfileDetailsRequest
	 * @return PayPalTypeGetRecurringPaymentsProfileDetailsRequestType
	 */
	public function getGetRecurringPaymentsProfileDetailsRequest()
	{
		return $this->GetRecurringPaymentsProfileDetailsRequest;
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