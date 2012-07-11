<?php
/**
 * Class file for AmazonEc2TypeLaunchPermissionListType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeLaunchPermissionListType
 * @date 10/07/2012
 */
class AmazonEc2TypeLaunchPermissionListType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeLaunchPermissionItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeLaunchPermissionItemType item
	 * @return AmazonEc2TypeLaunchPermissionListType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param LaunchPermissionItemType item
	 * @return LaunchPermissionItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeLaunchPermissionItemType
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