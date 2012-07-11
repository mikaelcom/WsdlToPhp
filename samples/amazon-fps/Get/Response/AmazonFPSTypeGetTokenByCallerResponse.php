<?php
/**
 * Class file for AmazonFPSTypeGetTokenByCallerResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTokenByCallerResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTokenByCallerResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetTokenByCallerResult
	 * @var AmazonFPSTypeGetTokenByCallerResult
	 */
	public $GetTokenByCallerResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetTokenByCallerResult GetTokenByCallerResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetTokenByCallerResponse
	 */
	public function __construct($_GetTokenByCallerResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetTokenByCallerResult'=>$_GetTokenByCallerResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetTokenByCallerResult
	 * @param GetTokenByCallerResult GetTokenByCallerResult
	 * @return GetTokenByCallerResult
	 */
	public function setGetTokenByCallerResult($_GetTokenByCallerResult)
	{
		return ($this->GetTokenByCallerResult = $_GetTokenByCallerResult);
	}
	/**
	 * Get GetTokenByCallerResult
	 * @return AmazonFPSTypeGetTokenByCallerResult
	 */
	public function getGetTokenByCallerResult()
	{
		return $this->GetTokenByCallerResult;
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