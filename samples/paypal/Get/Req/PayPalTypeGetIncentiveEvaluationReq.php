<?php
/**
 * Class file for PayPalTypeGetIncentiveEvaluationReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetIncentiveEvaluationReq
 * @date 14/07/2012
 */
class PayPalTypeGetIncentiveEvaluationReq extends PayPalWsdlClass
{
	/**
	 * The GetIncentiveEvaluationRequest
	 * @var PayPalTypeGetIncentiveEvaluationRequestType
	 */
	public $GetIncentiveEvaluationRequest;
	/**
	 * Constructor
	 * @param PayPalTypeGetIncentiveEvaluationRequestType GetIncentiveEvaluationRequest
	 * @return PayPalTypeGetIncentiveEvaluationReq
	 */
	public function __construct($_GetIncentiveEvaluationRequest = null)
	{
		parent::__construct(array('GetIncentiveEvaluationRequest'=>$_GetIncentiveEvaluationRequest));
	}
	/**
	 * Set GetIncentiveEvaluationRequest
	 * @param GetIncentiveEvaluationRequestType GetIncentiveEvaluationRequest
	 * @return GetIncentiveEvaluationRequestType
	 */
	public function setGetIncentiveEvaluationRequest($_GetIncentiveEvaluationRequest)
	{
		return ($this->GetIncentiveEvaluationRequest = $_GetIncentiveEvaluationRequest);
	}
	/**
	 * Get GetIncentiveEvaluationRequest
	 * @return PayPalTypeGetIncentiveEvaluationRequestType
	 */
	public function getGetIncentiveEvaluationRequest()
	{
		return $this->GetIncentiveEvaluationRequest;
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