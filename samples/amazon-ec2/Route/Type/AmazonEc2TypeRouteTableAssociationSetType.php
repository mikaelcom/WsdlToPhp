<?php
/**
 * Class file for AmazonEc2TypeRouteTableAssociationSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRouteTableAssociationSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeRouteTableAssociationSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeRouteTableAssociationType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeRouteTableAssociationType item
	 * @return AmazonEc2TypeRouteTableAssociationSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param RouteTableAssociationType item
	 * @return RouteTableAssociationType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeRouteTableAssociationType
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