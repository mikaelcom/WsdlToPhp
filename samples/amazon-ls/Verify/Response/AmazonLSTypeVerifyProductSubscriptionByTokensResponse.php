<?php
/**
 * Class file for AmazonLSTypeVerifyProductSubscriptionByTokensResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeVerifyProductSubscriptionByTokensResponse
 * @date 10/07/2012
 */
class AmazonLSTypeVerifyProductSubscriptionByTokensResponse extends AmazonLSWsdlClass
{
	/**
	 * The VerifyProductSubscriptionByTokensResult
	 * @var AmazonLSTypeVerifyProductSubscriptionByTokensResult
	 */
	public $VerifyProductSubscriptionByTokensResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonLSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonLSTypeVerifyProductSubscriptionByTokensResult VerifyProductSubscriptionByTokensResult
	 * @param AmazonLSTypeResponseMetadata ResponseMetadata
	 * @return AmazonLSTypeVerifyProductSubscriptionByTokensResponse
	 */
	public function __construct($_VerifyProductSubscriptionByTokensResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('VerifyProductSubscriptionByTokensResult'=>$_VerifyProductSubscriptionByTokensResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set VerifyProductSubscriptionByTokensResult
	 * @param VerifyProductSubscriptionByTokensResult VerifyProductSubscriptionByTokensResult
	 * @return VerifyProductSubscriptionByTokensResult
	 */
	public function setVerifyProductSubscriptionByTokensResult($_VerifyProductSubscriptionByTokensResult)
	{
		return ($this->VerifyProductSubscriptionByTokensResult = $_VerifyProductSubscriptionByTokensResult);
	}
	/**
	 * Get VerifyProductSubscriptionByTokensResult
	 * @return AmazonLSTypeVerifyProductSubscriptionByTokensResult
	 */
	public function getVerifyProductSubscriptionByTokensResult()
	{
		return $this->VerifyProductSubscriptionByTokensResult;
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
	 * @return AmazonLSTypeResponseMetadata
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