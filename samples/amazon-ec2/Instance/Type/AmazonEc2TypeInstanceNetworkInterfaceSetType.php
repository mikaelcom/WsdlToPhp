<?php
/**
 * Class file for AmazonEc2TypeInstanceNetworkInterfaceSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceNetworkInterfaceSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceNetworkInterfaceSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeInstanceNetworkInterfaceSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInstanceNetworkInterfaceSetItemType item
	 * @return AmazonEc2TypeInstanceNetworkInterfaceSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InstanceNetworkInterfaceSetItemType item
	 * @return InstanceNetworkInterfaceSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeInstanceNetworkInterfaceSetItemType
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