<?php
/**
 * Class file for PayPalTypeGetIncentiveEvaluationResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetIncentiveEvaluationResponseType
 * @date 14/07/2012
 */
class PayPalTypeGetIncentiveEvaluationResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The GetIncentiveEvaluationResponseDetails
	 * @var PayPalTypeGetIncentiveEvaluationResponseDetailsType
	 */
	public $GetIncentiveEvaluationResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeGetIncentiveEvaluationResponseDetailsType GetIncentiveEvaluationResponseDetails
	 * @return PayPalTypeGetIncentiveEvaluationResponseType
	 */
	public function __construct($_GetIncentiveEvaluationResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('GetIncentiveEvaluationResponseDetails'=>$_GetIncentiveEvaluationResponseDetails));
	}
	/**
	 * Set GetIncentiveEvaluationResponseDetails
	 * @param GetIncentiveEvaluationResponseDetailsType GetIncentiveEvaluationResponseDetails
	 * @return GetIncentiveEvaluationResponseDetailsType
	 */
	public function setGetIncentiveEvaluationResponseDetails($_GetIncentiveEvaluationResponseDetails)
	{
		return ($this->GetIncentiveEvaluationResponseDetails = $_GetIncentiveEvaluationResponseDetails);
	}
	/**
	 * Get GetIncentiveEvaluationResponseDetails
	 * @return PayPalTypeGetIncentiveEvaluationResponseDetailsType
	 */
	public function getGetIncentiveEvaluationResponseDetails()
	{
		return $this->GetIncentiveEvaluationResponseDetails;
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