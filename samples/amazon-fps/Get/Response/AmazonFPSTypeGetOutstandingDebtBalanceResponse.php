<?php
/**
 * Class file for AmazonFPSTypeGetOutstandingDebtBalanceResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetOutstandingDebtBalanceResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetOutstandingDebtBalanceResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetOutstandingDebtBalanceResult
	 * @var AmazonFPSTypeGetOutstandingDebtBalanceResult
	 */
	public $GetOutstandingDebtBalanceResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetOutstandingDebtBalanceResult GetOutstandingDebtBalanceResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetOutstandingDebtBalanceResponse
	 */
	public function __construct($_GetOutstandingDebtBalanceResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetOutstandingDebtBalanceResult'=>$_GetOutstandingDebtBalanceResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetOutstandingDebtBalanceResult
	 * @param GetOutstandingDebtBalanceResult GetOutstandingDebtBalanceResult
	 * @return GetOutstandingDebtBalanceResult
	 */
	public function setGetOutstandingDebtBalanceResult($_GetOutstandingDebtBalanceResult)
	{
		return ($this->GetOutstandingDebtBalanceResult = $_GetOutstandingDebtBalanceResult);
	}
	/**
	 * Get GetOutstandingDebtBalanceResult
	 * @return AmazonFPSTypeGetOutstandingDebtBalanceResult
	 */
	public function getGetOutstandingDebtBalanceResult()
	{
		return $this->GetOutstandingDebtBalanceResult;
	}
	/**
	 * Set ResponseMetadata
	 * @param ResponseMetadata ResponseMetadata
	 * @return ResponseMetadata
	 */
	public function setResponseMetadata($_ResponseMetadata)
	{
		return ($this->ResponseMetadata = $_ResponseMetadata);
	}
	/**
	 * Get ResponseMetadata
	 * @return AmazonFPSTypeResponseMetadata
	 */
	public function getResponseMetadata()
	{
		return $this->ResponseMetadata;
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