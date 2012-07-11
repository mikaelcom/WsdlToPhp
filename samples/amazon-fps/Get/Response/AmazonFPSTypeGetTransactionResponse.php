<?php
/**
 * Class file for AmazonFPSTypeGetTransactionResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTransactionResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTransactionResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetTransactionResult
	 * @var AmazonFPSTypeGetTransactionResult
	 */
	public $GetTransactionResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetTransactionResult GetTransactionResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetTransactionResponse
	 */
	public function __construct($_GetTransactionResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetTransactionResult'=>$_GetTransactionResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetTransactionResult
	 * @param GetTransactionResult GetTransactionResult
	 * @return GetTransactionResult
	 */
	public function setGetTransactionResult($_GetTransactionResult)
	{
		return ($this->GetTransactionResult = $_GetTransactionResult);
	}
	/**
	 * Get GetTransactionResult
	 * @return AmazonFPSTypeGetTransactionResult
	 */
	public function getGetTransactionResult()
	{
		return $this->GetTransactionResult;
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