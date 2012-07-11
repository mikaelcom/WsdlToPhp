<?php
/**
 * Class file for AmazonEc2TypeSpotInstanceRequestSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSpotInstanceRequestSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeSpotInstanceRequestSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeSpotInstanceRequestSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeSpotInstanceRequestSetItemType item
	 * @return AmazonEc2TypeSpotInstanceRequestSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param SpotInstanceRequestSetItemType item
	 * @return SpotInstanceRequestSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeSpotInstanceRequestSetItemType
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