<?php
/**
 * Class file for PayPalTypeGetIncentiveEvaluationResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetIncentiveEvaluationResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeGetIncentiveEvaluationResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The IncentiveDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1000
	 * @var PayPalTypeIncentiveDetailType
	 */
	public $IncentiveDetails;
	/**
	 * The RequestId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RequestId;
	/**
	 * Constructor
	 * @param PayPalTypeIncentiveDetailType IncentiveDetails
	 * @param string RequestId
	 * @return PayPalTypeGetIncentiveEvaluationResponseDetailsType
	 */
	public function __construct($_IncentiveDetails = null,$_RequestId = null)
	{
		parent::__construct(array('IncentiveDetails'=>$_IncentiveDetails,'RequestId'=>$_RequestId));
	}
	/**
	 * Set IncentiveDetails
	 * @param IncentiveDetailType IncentiveDetails
	 * @return IncentiveDetailType
	 */
	public function setIncentiveDetails($_IncentiveDetails)
	{
		return ($this->IncentiveDetails = $_IncentiveDetails);
	}
	/**
	 * Get IncentiveDetails
	 * @return PayPalTypeIncentiveDetailType
	 */
	public function getIncentiveDetails()
	{
		return $this->IncentiveDetails;
	}
	/**
	 * Set RequestId
	 * @param string RequestId
	 * @return string
	 */
	public function setRequestId($_RequestId)
	{
		return ($this->RequestId = $_RequestId);
	}
	/**
	 * Get RequestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->RequestId;
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