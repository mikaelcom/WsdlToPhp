<?php
/**
 * Class file for PayPalTypeGetIncentiveEvaluationRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetIncentiveEvaluationRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeGetIncentiveEvaluationRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The ExternalBuyerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExternalBuyerId;
	/**
	 * The IncentiveCodes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1000
	 * @var string
	 */
	public $IncentiveCodes;
	/**
	 * The ApplyIndication
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1000
	 * @var PayPalTypeIncentiveApplyIndicationType
	 */
	public $ApplyIndication;
	/**
	 * The Buckets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 100
	 * @var PayPalTypeIncentiveBucketType
	 */
	public $Buckets;
	/**
	 * The CartTotalAmt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeBasicAmountType
	 */
	public $CartTotalAmt;
	/**
	 * The RequestDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeIncentiveRequestDetailsType
	 */
	public $RequestDetails;
	/**
	 * Constructor
	 * @param string ExternalBuyerId
	 * @param string IncentiveCodes
	 * @param PayPalTypeIncentiveApplyIndicationType ApplyIndication
	 * @param PayPalTypeIncentiveBucketType Buckets
	 * @param PayPalTypeBasicAmountType CartTotalAmt
	 * @param PayPalTypeIncentiveRequestDetailsType RequestDetails
	 * @return PayPalTypeGetIncentiveEvaluationRequestDetailsType
	 */
	public function __construct($_ExternalBuyerId = null,$_IncentiveCodes = null,$_ApplyIndication = null,$_Buckets = null,$_CartTotalAmt = null,$_RequestDetails = null)
	{
		parent::__construct(array('ExternalBuyerId'=>$_ExternalBuyerId,'IncentiveCodes'=>$_IncentiveCodes,'ApplyIndication'=>$_ApplyIndication,'Buckets'=>$_Buckets,'CartTotalAmt'=>$_CartTotalAmt,'RequestDetails'=>$_RequestDetails));
	}
	/**
	 * Set ExternalBuyerId
	 * @param string ExternalBuyerId
	 * @return string
	 */
	public function setExternalBuyerId($_ExternalBuyerId)
	{
		return ($this->ExternalBuyerId = $_ExternalBuyerId);
	}
	/**
	 * Get ExternalBuyerId
	 * @return string
	 */
	public function getExternalBuyerId()
	{
		return $this->ExternalBuyerId;
	}
	/**
	 * Set IncentiveCodes
	 * @param string IncentiveCodes
	 * @return string
	 */
	public function setIncentiveCodes($_IncentiveCodes)
	{
		return ($this->IncentiveCodes = $_IncentiveCodes);
	}
	/**
	 * Get IncentiveCodes
	 * @return string
	 */
	public function getIncentiveCodes()
	{
		return $this->IncentiveCodes;
	}
	/**
	 * Set ApplyIndication
	 * @param IncentiveApplyIndicationType ApplyIndication
	 * @return IncentiveApplyIndicationType
	 */
	public function setApplyIndication($_ApplyIndication)
	{
		return ($this->ApplyIndication = $_ApplyIndication);
	}
	/**
	 * Get ApplyIndication
	 * @return PayPalTypeIncentiveApplyIndicationType
	 */
	public function getApplyIndication()
	{
		return $this->ApplyIndication;
	}
	/**
	 * Set Buckets
	 * @param IncentiveBucketType Buckets
	 * @return IncentiveBucketType
	 */
	public function setBuckets($_Buckets)
	{
		return ($this->Buckets = $_Buckets);
	}
	/**
	 * Get Buckets
	 * @return PayPalTypeIncentiveBucketType
	 */
	public function getBuckets()
	{
		return $this->Buckets;
	}
	/**
	 * Set CartTotalAmt
	 * @param BasicAmountType CartTotalAmt
	 * @return BasicAmountType
	 */
	public function setCartTotalAmt($_CartTotalAmt)
	{
		return ($this->CartTotalAmt = $_CartTotalAmt);
	}
	/**
	 * Get CartTotalAmt
	 * @return PayPalTypeBasicAmountType
	 */
	public function getCartTotalAmt()
	{
		return $this->CartTotalAmt;
	}
	/**
	 * Set RequestDetails
	 * @param IncentiveRequestDetailsType RequestDetails
	 * @return IncentiveRequestDetailsType
	 */
	public function setRequestDetails($_RequestDetails)
	{
		return ($this->RequestDetails = $_RequestDetails);
	}
	/**
	 * Get RequestDetails
	 * @return PayPalTypeIncentiveRequestDetailsType
	 */
	public function getRequestDetails()
	{
		return $this->RequestDetails;
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