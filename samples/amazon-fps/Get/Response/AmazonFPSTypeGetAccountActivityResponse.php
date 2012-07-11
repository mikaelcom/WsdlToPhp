<?php
/**
 * Class file for AmazonFPSTypeGetAccountActivityResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetAccountActivityResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetAccountActivityResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetAccountActivityResult
	 * @var AmazonFPSTypeGetAccountActivityResult
	 */
	public $GetAccountActivityResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetAccountActivityResult GetAccountActivityResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetAccountActivityResponse
	 */
	public function __construct($_GetAccountActivityResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetAccountActivityResult'=>$_GetAccountActivityResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetAccountActivityResult
	 * @param GetAccountActivityResult GetAccountActivityResult
	 * @return GetAccountActivityResult
	 */
	public function setGetAccountActivityResult($_GetAccountActivityResult)
	{
		return ($this->GetAccountActivityResult = $_GetAccountActivityResult);
	}
	/**
	 * Get GetAccountActivityResult
	 * @return AmazonFPSTypeGetAccountActivityResult
	 */
	public function getGetAccountActivityResult()
	{
		return $this->GetAccountActivityResult;
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