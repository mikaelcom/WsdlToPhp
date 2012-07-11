<?php
/**
 * Class file for AmazonECommerceServiceTypeBrowseNodes
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeBrowseNodes
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeBrowseNodes extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Request
	 * @var AmazonECommerceServiceTypeRequest
	 */
	public $Request;
	/**
	 * The BrowseNode
	 * @var AmazonECommerceServiceTypeBrowseNode
	 */
	public $BrowseNode;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeRequest Request
	 * @param AmazonECommerceServiceTypeBrowseNode BrowseNode
	 * @return AmazonECommerceServiceTypeBrowseNodes
	 */
	public function __construct($_Request = null,$_BrowseNode = null)
	{
		parent::__construct(array('Request'=>$_Request,'BrowseNode'=>$_BrowseNode));
	}
	/**
	 * Set Request
	 * @param Request Request
	 * @return Request
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonECommerceServiceTypeRequest
	 */
	public function getRequest()
	{
		return $this->Request;
	}
	/**
	 * Set BrowseNode
	 * @param BrowseNode BrowseNode
	 * @return BrowseNode
	 */
	public function setBrowseNode($_BrowseNode)
	{
		return ($this->BrowseNode = $_BrowseNode);
	}
	/**
	 * Get BrowseNode
	 * @return AmazonECommerceServiceTypeBrowseNode
	 */
	public function getBrowseNode()
	{
		return $this->BrowseNode;
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