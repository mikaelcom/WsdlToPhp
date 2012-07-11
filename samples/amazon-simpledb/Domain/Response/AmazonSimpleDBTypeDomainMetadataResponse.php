<?php
/**
 * Class file for AmazonSimpleDBTypeDomainMetadataResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeDomainMetadataResponse
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeDomainMetadataResponse extends AmazonSimpleDBWsdlClass
{
	/**
	 * The DomainMetadataResult
	 * @var AmazonSimpleDBTypeDomainMetadataResult
	 */
	public $DomainMetadataResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonSimpleDBTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonSimpleDBTypeDomainMetadataResult DomainMetadataResult
	 * @param AmazonSimpleDBTypeResponseMetadata ResponseMetadata
	 * @return AmazonSimpleDBTypeDomainMetadataResponse
	 */
	public function __construct($_DomainMetadataResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('DomainMetadataResult'=>$_DomainMetadataResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set DomainMetadataResult
	 * @param DomainMetadataResult DomainMetadataResult
	 * @return DomainMetadataResult
	 */
	public function setDomainMetadataResult($_DomainMetadataResult)
	{
		return ($this->DomainMetadataResult = $_DomainMetadataResult);
	}
	/**
	 * Get DomainMetadataResult
	 * @return AmazonSimpleDBTypeDomainMetadataResult
	 */
	public function getDomainMetadataResult()
	{
		return $this->DomainMetadataResult;
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