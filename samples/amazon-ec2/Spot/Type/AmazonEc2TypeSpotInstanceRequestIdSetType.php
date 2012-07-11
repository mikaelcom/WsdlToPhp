<?php
/**
 * Class file for AmazonEc2TypeSpotInstanceRequestIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSpotInstanceRequestIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeSpotInstanceRequestIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeSpotInstanceRequestIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeSpotInstanceRequestIdSetItemType item
	 * @return AmazonEc2TypeSpotInstanceRequestIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param SpotInstanceRequestIdSetItemType item
	 * @return SpotInstanceRequestIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeSpotInstanceRequestIdSetItemType
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