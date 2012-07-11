<?php
/**
 * Class file for AmazonEc2TypeVpnConnectionIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVpnConnectionIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeVpnConnectionIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeVpnConnectionIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeVpnConnectionIdSetItemType item
	 * @return AmazonEc2TypeVpnConnectionIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param VpnConnectionIdSetItemType item
	 * @return VpnConnectionIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeVpnConnectionIdSetItemType
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