<?php
/**
 * Class file for PayPalTypeGetIncentiveEvaluationRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetIncentiveEvaluationRequestType
 * @date 14/07/2012
 */
class PayPalTypeGetIncentiveEvaluationRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The GetIncentiveEvaluationRequestDetails
	 * @var PayPalTypeGetIncentiveEvaluationRequestDetailsType
	 */
	public $GetIncentiveEvaluationRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeGetIncentiveEvaluationRequestDetailsType GetIncentiveEvaluationRequestDetails
	 * @return PayPalTypeGetIncentiveEvaluationRequestType
	 */
	public function __construct($_GetIncentiveEvaluationRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('GetIncentiveEvaluationRequestDetails'=>$_GetIncentiveEvaluationRequestDetails));
	}
	/**
	 * Set GetIncentiveEvaluationRequestDetails
	 * @param GetIncentiveEvaluationRequestDetailsType GetIncentiveEvaluationRequestDetails
	 * @return GetIncentiveEvaluationRequestDetailsType
	 */
	public function setGetIncentiveEvaluationRequestDetails($_GetIncentiveEvaluationRequestDetails)
	{
		return ($this->GetIncentiveEvaluationRequestDetails = $_GetIncentiveEvaluationRequestDetails);
	}
	/**
	 * Get GetIncentiveEvaluationRequestDetails
	 * @return PayPalTypeGetIncentiveEvaluationRequestDetailsType
	 */
	public function getGetIncentiveEvaluationRequestDetails()
	{
		return $this->GetIncentiveEvaluationRequestDetails;
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