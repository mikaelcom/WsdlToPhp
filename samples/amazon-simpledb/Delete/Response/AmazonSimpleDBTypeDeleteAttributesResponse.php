<?php
/**
 * Class file for AmazonSimpleDBTypeDeleteAttributesResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeDeleteAttributesResponse
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeDeleteAttributesResponse extends AmazonSimpleDBWsdlClass
{
	/**
	 * The ResponseMetadata
	 * @var AmazonSimpleDBTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonSimpleDBTypeResponseMetadata ResponseMetadata
	 * @return AmazonSimpleDBTypeDeleteAttributesResponse
	 */
	public function __construct($_ResponseMetadata = null)
	{
		parent::__construct(array('ResponseMetadata'=>$_ResponseMetadata));
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