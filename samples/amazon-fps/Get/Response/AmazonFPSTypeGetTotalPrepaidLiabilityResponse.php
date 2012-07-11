<?php
/**
 * Class file for AmazonFPSTypeGetTotalPrepaidLiabilityResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTotalPrepaidLiabilityResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTotalPrepaidLiabilityResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetTotalPrepaidLiabilityResult
	 * @var AmazonFPSTypeGetTotalPrepaidLiabilityResult
	 */
	public $GetTotalPrepaidLiabilityResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetTotalPrepaidLiabilityResult GetTotalPrepaidLiabilityResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetTotalPrepaidLiabilityResponse
	 */
	public function __construct($_GetTotalPrepaidLiabilityResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetTotalPrepaidLiabilityResult'=>$_GetTotalPrepaidLiabilityResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetTotalPrepaidLiabilityResult
	 * @param GetTotalPrepaidLiabilityResult GetTotalPrepaidLiabilityResult
	 * @return GetTotalPrepaidLiabilityResult
	 */
	public function setGetTotalPrepaidLiabilityResult($_GetTotalPrepaidLiabilityResult)
	{
		return ($this->GetTotalPrepaidLiabilityResult = $_GetTotalPrepaidLiabilityResult);
	}
	/**
	 * Get GetTotalPrepaidLiabilityResult
	 * @return AmazonFPSTypeGetTotalPrepaidLiabilityResult
	 */
	public function getGetTotalPrepaidLiabilityResult()
	{
		return $this->GetTotalPrepaidLiabilityResult;
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