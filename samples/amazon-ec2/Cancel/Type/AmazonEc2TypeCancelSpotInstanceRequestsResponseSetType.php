<?php
/**
 * Class file for AmazonEc2TypeCancelSpotInstanceRequestsResponseSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCancelSpotInstanceRequestsResponseSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeCancelSpotInstanceRequestsResponseSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeCancelSpotInstanceRequestsResponseSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeCancelSpotInstanceRequestsResponseSetItemType item
	 * @return AmazonEc2TypeCancelSpotInstanceRequestsResponseSetType
	 */
	public function __construct($_item)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param CancelSpotInstanceRequestsResponseSetItemType item
	 * @return CancelSpotInstanceRequestsResponseSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeCancelSpotInstanceRequestsResponseSetItemType
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