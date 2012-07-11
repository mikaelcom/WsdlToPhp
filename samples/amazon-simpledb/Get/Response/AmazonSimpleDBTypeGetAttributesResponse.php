<?php
/**
 * Class file for AmazonSimpleDBTypeGetAttributesResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeGetAttributesResponse
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeGetAttributesResponse extends AmazonSimpleDBWsdlClass
{
	/**
	 * The GetAttributesResult
	 * @var AmazonSimpleDBTypeGetAttributesResult
	 */
	public $GetAttributesResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonSimpleDBTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonSimpleDBTypeGetAttributesResult GetAttributesResult
	 * @param AmazonSimpleDBTypeResponseMetadata ResponseMetadata
	 * @return AmazonSimpleDBTypeGetAttributesResponse
	 */
	public function __construct($_GetAttributesResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetAttributesResult'=>$_GetAttributesResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetAttributesResult
	 * @param GetAttributesResult GetAttributesResult
	 * @return GetAttributesResult
	 */
	public function setGetAttributesResult($_GetAttributesResult)
	{
		return ($this->GetAttributesResult = $_GetAttributesResult);
	}
	/**
	 * Get GetAttributesResult
	 * @return AmazonSimpleDBTypeGetAttributesResult
	 */
	public function getGetAttributesResult()
	{
		return $this->GetAttributesResult;
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
	 * @return AmazonSimpleDBTypeResponseMetadata
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