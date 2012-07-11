<?php
/**
 * Class file for AmazonFPSTypeGetTokenUsageResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTokenUsageResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTokenUsageResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetTokenUsageResult
	 * @var AmazonFPSTypeGetTokenUsageResult
	 */
	public $GetTokenUsageResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetTokenUsageResult GetTokenUsageResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetTokenUsageResponse
	 */
	public function __construct($_GetTokenUsageResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetTokenUsageResult'=>$_GetTokenUsageResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetTokenUsageResult
	 * @param GetTokenUsageResult GetTokenUsageResult
	 * @return GetTokenUsageResult
	 */
	public function setGetTokenUsageResult($_GetTokenUsageResult)
	{
		return ($this->GetTokenUsageResult = $_GetTokenUsageResult);
	}
	/**
	 * Get GetTokenUsageResult
	 * @return AmazonFPSTypeGetTokenUsageResult
	 */
	public function getGetTokenUsageResult()
	{
		return $this->GetTokenUsageResult;
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