<?php
/**
 * Class file for AmazonFPSTypeGetTransactionsForSubscriptionResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTransactionsForSubscriptionResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTransactionsForSubscriptionResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetTransactionsForSubscriptionResult
	 * @var AmazonFPSTypeGetTransactionsForSubscriptionResult
	 */
	public $GetTransactionsForSubscriptionResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetTransactionsForSubscriptionResult GetTransactionsForSubscriptionResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetTransactionsForSubscriptionResponse
	 */
	public function __construct($_GetTransactionsForSubscriptionResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetTransactionsForSubscriptionResult'=>$_GetTransactionsForSubscriptionResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetTransactionsForSubscriptionResult
	 * @param GetTransactionsForSubscriptionResult GetTransactionsForSubscriptionResult
	 * @return GetTransactionsForSubscriptionResult
	 */
	public function setGetTransactionsForSubscriptionResult($_GetTransactionsForSubscriptionResult)
	{
		return ($this->GetTransactionsForSubscriptionResult = $_GetTransactionsForSubscriptionResult);
	}
	/**
	 * Get GetTransactionsForSubscriptionResult
	 * @return AmazonFPSTypeGetTransactionsForSubscriptionResult
	 */
	public function getGetTransactionsForSubscriptionResult()
	{
		return $this->GetTransactionsForSubscriptionResult;
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