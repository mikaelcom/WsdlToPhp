<?php
/**
 * Class file for AmazonEc2TypeIpRangeSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeIpRangeSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeIpRangeSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeIpRangeItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeIpRangeItemType item
	 * @return AmazonEc2TypeIpRangeSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param IpRangeItemType item
	 * @return IpRangeItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeIpRangeItemType
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