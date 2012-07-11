<?php
/**
 * Class file for AmazonEc2TypeCreateVolumePermissionListType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateVolumePermissionListType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateVolumePermissionListType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeCreateVolumePermissionItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeCreateVolumePermissionItemType item
	 * @return AmazonEc2TypeCreateVolumePermissionListType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param CreateVolumePermissionItemType item
	 * @return CreateVolumePermissionItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeCreateVolumePermissionItemType
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