<?php
/**
 * Class file for AmazonFPSTypeGetTransactionStatusResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTransactionStatusResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTransactionStatusResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetTransactionStatusResult
	 * @var AmazonFPSTypeGetTransactionStatusResult
	 */
	public $GetTransactionStatusResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetTransactionStatusResult GetTransactionStatusResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetTransactionStatusResponse
	 */
	public function __construct($_GetTransactionStatusResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetTransactionStatusResult'=>$_GetTransactionStatusResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetTransactionStatusResult
	 * @param GetTransactionStatusResult GetTransactionStatusResult
	 * @return GetTransactionStatusResult
	 */
	public function setGetTransactionStatusResult($_GetTransactionStatusResult)
	{
		return ($this->GetTransactionStatusResult = $_GetTransactionStatusResult);
	}
	/**
	 * Get GetTransactionStatusResult
	 * @return AmazonFPSTypeGetTransactionStatusResult
	 */
	public function getGetTransactionStatusResult()
	{
		return $this->GetTransactionStatusResult;
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