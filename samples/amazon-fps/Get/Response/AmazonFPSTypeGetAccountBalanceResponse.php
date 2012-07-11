<?php
/**
 * Class file for AmazonFPSTypeGetAccountBalanceResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetAccountBalanceResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetAccountBalanceResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetAccountBalanceResult
	 * @var AmazonFPSTypeGetAccountBalanceResult
	 */
	public $GetAccountBalanceResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetAccountBalanceResult GetAccountBalanceResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetAccountBalanceResponse
	 */
	public function __construct($_GetAccountBalanceResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetAccountBalanceResult'=>$_GetAccountBalanceResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetAccountBalanceResult
	 * @param GetAccountBalanceResult GetAccountBalanceResult
	 * @return GetAccountBalanceResult
	 */
	public function setGetAccountBalanceResult($_GetAccountBalanceResult)
	{
		return ($this->GetAccountBalanceResult = $_GetAccountBalanceResult);
	}
	/**
	 * Get GetAccountBalanceResult
	 * @return AmazonFPSTypeGetAccountBalanceResult
	 */
	public function getGetAccountBalanceResult()
	{
		return $this->GetAccountBalanceResult;
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