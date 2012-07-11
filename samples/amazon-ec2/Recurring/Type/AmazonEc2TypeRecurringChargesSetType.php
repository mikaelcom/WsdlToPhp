<?php
/**
 * Class file for AmazonEc2TypeRecurringChargesSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRecurringChargesSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeRecurringChargesSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeRecurringChargesSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeRecurringChargesSetItemType item
	 * @return AmazonEc2TypeRecurringChargesSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param RecurringChargesSetItemType item
	 * @return RecurringChargesSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeRecurringChargesSetItemType
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