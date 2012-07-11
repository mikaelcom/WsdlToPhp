<?php
/**
 * Class file for AmazonECommerceServiceTypeChildren
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeChildren
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeChildren extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The BrowseNode
	 * @var AmazonECommerceServiceTypeBrowseNode
	 */
	public $BrowseNode;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeBrowseNode BrowseNode
	 * @return AmazonECommerceServiceTypeChildren
	 */
	public function __construct($_BrowseNode = null)
	{
		parent::__construct(array('BrowseNode'=>$_BrowseNode));
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