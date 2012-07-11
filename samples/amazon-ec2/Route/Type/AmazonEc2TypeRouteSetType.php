<?php
/**
 * Class file for AmazonEc2TypeRouteSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRouteSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeRouteSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeRouteType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeRouteType item
	 * @return AmazonEc2TypeRouteSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param RouteType item
	 * @return RouteType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeRouteType
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