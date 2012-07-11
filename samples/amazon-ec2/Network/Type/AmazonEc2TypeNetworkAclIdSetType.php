<?php
/**
 * Class file for AmazonEc2TypeNetworkAclIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeNetworkAclIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeNetworkAclIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeNetworkAclIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeNetworkAclIdSetItemType item
	 * @return AmazonEc2TypeNetworkAclIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param NetworkAclIdSetItemType item
	 * @return NetworkAclIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeNetworkAclIdSetItemType
	 */
	public function getItem()
	{
		return $this->item;
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