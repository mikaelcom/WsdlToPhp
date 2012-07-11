<?php
/**
 * Class file for AmazonEc2TypeBundleInstanceTasksSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeBundleInstanceTasksSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeBundleInstanceTasksSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeBundleInstanceTaskType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeBundleInstanceTaskType item
	 * @return AmazonEc2TypeBundleInstanceTasksSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param BundleInstanceTaskType item
	 * @return BundleInstanceTaskType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeBundleInstanceTaskType
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