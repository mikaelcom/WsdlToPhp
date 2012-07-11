<?php
/**
 * Class file for AmazonFPSTypeGetPaymentInstructionResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetPaymentInstructionResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetPaymentInstructionResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetPaymentInstructionResult
	 * @var AmazonFPSTypeGetPaymentInstructionResult
	 */
	public $GetPaymentInstructionResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetPaymentInstructionResult GetPaymentInstructionResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetPaymentInstructionResponse
	 */
	public function __construct($_GetPaymentInstructionResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetPaymentInstructionResult'=>$_GetPaymentInstructionResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetPaymentInstructionResult
	 * @param GetPaymentInstructionResult GetPaymentInstructionResult
	 * @return GetPaymentInstructionResult
	 */
	public function setGetPaymentInstructionResult($_GetPaymentInstructionResult)
	{
		return ($this->GetPaymentInstructionResult = $_GetPaymentInstructionResult);
	}
	/**
	 * Get GetPaymentInstructionResult
	 * @return AmazonFPSTypeGetPaymentInstructionResult
	 */
	public function getGetPaymentInstructionResult()
	{
		return $this->GetPaymentInstructionResult;
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