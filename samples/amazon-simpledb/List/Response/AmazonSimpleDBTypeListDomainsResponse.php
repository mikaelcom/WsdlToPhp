<?php
/**
 * Class file for AmazonSimpleDBTypeListDomainsResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeListDomainsResponse
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeListDomainsResponse extends AmazonSimpleDBWsdlClass
{
	/**
	 * The ListDomainsResult
	 * @var AmazonSimpleDBTypeListDomainsResult
	 */
	public $ListDomainsResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonSimpleDBTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonSimpleDBTypeListDomainsResult ListDomainsResult
	 * @param AmazonSimpleDBTypeResponseMetadata ResponseMetadata
	 * @return AmazonSimpleDBTypeListDomainsResponse
	 */
	public function __construct($_ListDomainsResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('ListDomainsResult'=>$_ListDomainsResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set ListDomainsResult
	 * @param ListDomainsResult ListDomainsResult
	 * @return ListDomainsResult
	 */
	public function setListDomainsResult($_ListDomainsResult)
	{
		return ($this->ListDomainsResult = $_ListDomainsResult);
	}
	/**
	 * Get ListDomainsResult
	 * @return AmazonSimpleDBTypeListDomainsResult
	 */
	public function getListDomainsResult()
	{
		return $this->ListDomainsResult;
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