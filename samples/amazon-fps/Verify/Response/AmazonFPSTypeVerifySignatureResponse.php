<?php
/**
 * Class file for AmazonFPSTypeVerifySignatureResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeVerifySignatureResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeVerifySignatureResponse extends AmazonFPSWsdlClass
{
	/**
	 * The VerifySignatureResult
	 * @var AmazonFPSTypeVerifySignatureResult
	 */
	public $VerifySignatureResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeVerifySignatureResult VerifySignatureResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeVerifySignatureResponse
	 */
	public function __construct($_VerifySignatureResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('VerifySignatureResult'=>$_VerifySignatureResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set VerifySignatureResult
	 * @param VerifySignatureResult VerifySignatureResult
	 * @return VerifySignatureResult
	 */
	public function setVerifySignatureResult($_VerifySignatureResult)
	{
		return ($this->VerifySignatureResult = $_VerifySignatureResult);
	}
	/**
	 * Get VerifySignatureResult
	 * @return AmazonFPSTypeVerifySignatureResult
	 */
	public function getVerifySignatureResult()
	{
		return $this->VerifySignatureResult;
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