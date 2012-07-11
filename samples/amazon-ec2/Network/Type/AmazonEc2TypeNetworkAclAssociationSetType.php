<?php
/**
 * Class file for AmazonEc2TypeNetworkAclAssociationSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeNetworkAclAssociationSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeNetworkAclAssociationSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeNetworkAclAssociationType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeNetworkAclAssociationType item
	 * @return AmazonEc2TypeNetworkAclAssociationSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param NetworkAclAssociationType item
	 * @return NetworkAclAssociationType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeNetworkAclAssociationType
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