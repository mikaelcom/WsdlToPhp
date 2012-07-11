<?php
/**
 * Class file for AmazonFPSTypeGetTokensResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTokensResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTokensResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetTokensResult
	 * @var AmazonFPSTypeGetTokensResult
	 */
	public $GetTokensResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetTokensResult GetTokensResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetTokensResponse
	 */
	public function __construct($_GetTokensResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetTokensResult'=>$_GetTokensResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetTokensResult
	 * @param GetTokensResult GetTokensResult
	 * @return GetTokensResult
	 */
	public function setGetTokensResult($_GetTokensResult)
	{
		return ($this->GetTokensResult = $_GetTokensResult);
	}
	/**
	 * Get GetTokensResult
	 * @return AmazonFPSTypeGetTokensResult
	 */
	public function getGetTokensResult()
	{
		return $this->GetTokensResult;
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