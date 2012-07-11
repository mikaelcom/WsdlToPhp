<?php
/**
 * Class file for AmazonEc2TypeSpotPriceHistorySetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSpotPriceHistorySetType
 * @date 10/07/2012
 */
class AmazonEc2TypeSpotPriceHistorySetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeSpotPriceHistorySetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeSpotPriceHistorySetItemType item
	 * @return AmazonEc2TypeSpotPriceHistorySetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param SpotPriceHistorySetItemType item
	 * @return SpotPriceHistorySetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeSpotPriceHistorySetItemType
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