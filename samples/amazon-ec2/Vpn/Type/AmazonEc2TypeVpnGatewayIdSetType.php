<?php
/**
 * Class file for AmazonEc2TypeVpnGatewayIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVpnGatewayIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeVpnGatewayIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeVpnGatewayIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeVpnGatewayIdSetItemType item
	 * @return AmazonEc2TypeVpnGatewayIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param VpnGatewayIdSetItemType item
	 * @return VpnGatewayIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeVpnGatewayIdSetItemType
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