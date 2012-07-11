<?php
/**
 * Class file for AmazonEc2TypeVpnGatewaySetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVpnGatewaySetType
 * @date 10/07/2012
 */
class AmazonEc2TypeVpnGatewaySetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeVpnGatewayType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeVpnGatewayType item
	 * @return AmazonEc2TypeVpnGatewaySetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param VpnGatewayType item
	 * @return VpnGatewayType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeVpnGatewayType
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