<?php
/**
 * Class file for AmazonFPSTypeGetDebtBalanceResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetDebtBalanceResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetDebtBalanceResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetDebtBalanceResult
	 * @var AmazonFPSTypeGetDebtBalanceResult
	 */
	public $GetDebtBalanceResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetDebtBalanceResult GetDebtBalanceResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetDebtBalanceResponse
	 */
	public function __construct($_GetDebtBalanceResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetDebtBalanceResult'=>$_GetDebtBalanceResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetDebtBalanceResult
	 * @param GetDebtBalanceResult GetDebtBalanceResult
	 * @return GetDebtBalanceResult
	 */
	public function setGetDebtBalanceResult($_GetDebtBalanceResult)
	{
		return ($this->GetDebtBalanceResult = $_GetDebtBalanceResult);
	}
	/**
	 * Get GetDebtBalanceResult
	 * @return AmazonFPSTypeGetDebtBalanceResult
	 */
	public function getGetDebtBalanceResult()
	{
		return $this->GetDebtBalanceResult;
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