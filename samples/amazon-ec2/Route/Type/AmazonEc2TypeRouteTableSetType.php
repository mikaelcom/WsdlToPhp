<?php
/**
 * Class file for AmazonEc2TypeRouteTableSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRouteTableSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeRouteTableSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeRouteTableType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeRouteTableType item
	 * @return AmazonEc2TypeRouteTableSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param RouteTableType item
	 * @return RouteTableType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeRouteTableType
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