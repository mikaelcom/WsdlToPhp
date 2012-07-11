<?php
/**
 * Class file for AmazonEc2TypeRouteTableIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRouteTableIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeRouteTableIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeRouteTableIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeRouteTableIdSetItemType item
	 * @return AmazonEc2TypeRouteTableIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param RouteTableIdSetItemType item
	 * @return RouteTableIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeRouteTableIdSetItemType
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