<?php
/**
 * Class file for AmazonEc2TypeRunningInstancesSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRunningInstancesSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeRunningInstancesSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeRunningInstancesItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeRunningInstancesItemType item
	 * @return AmazonEc2TypeRunningInstancesSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param RunningInstancesItemType item
	 * @return RunningInstancesItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeRunningInstancesItemType
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