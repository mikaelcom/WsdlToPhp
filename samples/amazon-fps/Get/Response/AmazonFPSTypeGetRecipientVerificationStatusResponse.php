<?php
/**
 * Class file for AmazonFPSTypeGetRecipientVerificationStatusResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetRecipientVerificationStatusResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetRecipientVerificationStatusResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetRecipientVerificationStatusResult
	 * @var AmazonFPSTypeGetRecipientVerificationStatusResult
	 */
	public $GetRecipientVerificationStatusResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetRecipientVerificationStatusResult GetRecipientVerificationStatusResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetRecipientVerificationStatusResponse
	 */
	public function __construct($_GetRecipientVerificationStatusResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetRecipientVerificationStatusResult'=>$_GetRecipientVerificationStatusResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetRecipientVerificationStatusResult
	 * @param GetRecipientVerificationStatusResult GetRecipientVerificationStatusResult
	 * @return GetRecipientVerificationStatusResult
	 */
	public function setGetRecipientVerificationStatusResult($_GetRecipientVerificationStatusResult)
	{
		return ($this->GetRecipientVerificationStatusResult = $_GetRecipientVerificationStatusResult);
	}
	/**
	 * Get GetRecipientVerificationStatusResult
	 * @return AmazonFPSTypeGetRecipientVerificationStatusResult
	 */
	public function getGetRecipientVerificationStatusResult()
	{
		return $this->GetRecipientVerificationStatusResult;
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