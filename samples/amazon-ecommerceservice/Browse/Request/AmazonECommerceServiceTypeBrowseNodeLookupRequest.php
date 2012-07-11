<?php
/**
 * Class file for AmazonECommerceServiceTypeBrowseNodeLookupRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeBrowseNodeLookupRequest
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeBrowseNodeLookupRequest extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The BrowseNodeId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $BrowseNodeId;
	/**
	 * The ResponseGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $ResponseGroup;
	/**
	 * Constructor
	 * @param string BrowseNodeId
	 * @param string ResponseGroup
	 * @return AmazonECommerceServiceTypeBrowseNodeLookupRequest
	 */
	public function __construct($_BrowseNodeId = null,$_ResponseGroup = null)
	{
		parent::__construct(array('BrowseNodeId'=>$_BrowseNodeId,'ResponseGroup'=>$_ResponseGroup));
	}
	/**
	 * Set BrowseNodeId
	 * @param string BrowseNodeId
	 * @return string
	 */
	public function setBrowseNodeId($_BrowseNodeId)
	{
		return ($this->BrowseNodeId = $_BrowseNodeId);
	}
	/**
	 * Get BrowseNodeId
	 * @return string
	 */
	public function getBrowseNodeId()
	{
		return $this->BrowseNodeId;
	}
	/**
	 * Set ResponseGroup
	 * @param string ResponseGroup
	 * @return string
	 */
	public function setResponseGroup($_ResponseGroup)
	{
		return ($this->ResponseGroup = $_ResponseGroup);
	}
	/**
	 * Get ResponseGroup
	 * @return string
	 */
	public function getResponseGroup()
	{
		return $this->ResponseGroup;
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