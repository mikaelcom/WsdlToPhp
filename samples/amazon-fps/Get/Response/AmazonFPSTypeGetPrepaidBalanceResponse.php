<?php
/**
 * Class file for AmazonFPSTypeGetPrepaidBalanceResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetPrepaidBalanceResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetPrepaidBalanceResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetPrepaidBalanceResult
	 * @var AmazonFPSTypeGetPrepaidBalanceResult
	 */
	public $GetPrepaidBalanceResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetPrepaidBalanceResult GetPrepaidBalanceResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetPrepaidBalanceResponse
	 */
	public function __construct($_GetPrepaidBalanceResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetPrepaidBalanceResult'=>$_GetPrepaidBalanceResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetPrepaidBalanceResult
	 * @param GetPrepaidBalanceResult GetPrepaidBalanceResult
	 * @return GetPrepaidBalanceResult
	 */
	public function setGetPrepaidBalanceResult($_GetPrepaidBalanceResult)
	{
		return ($this->GetPrepaidBalanceResult = $_GetPrepaidBalanceResult);
	}
	/**
	 * Get GetPrepaidBalanceResult
	 * @return AmazonFPSTypeGetPrepaidBalanceResult
	 */
	public function getGetPrepaidBalanceResult()
	{
		return $this->GetPrepaidBalanceResult;
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