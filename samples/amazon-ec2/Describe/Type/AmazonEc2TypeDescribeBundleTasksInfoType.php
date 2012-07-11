<?php
/**
 * Class file for AmazonEc2TypeDescribeBundleTasksInfoType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeBundleTasksInfoType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeBundleTasksInfoType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeBundleTasksItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeBundleTasksItemType item
	 * @return AmazonEc2TypeDescribeBundleTasksInfoType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeBundleTasksItemType item
	 * @return DescribeBundleTasksItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeBundleTasksItemType
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