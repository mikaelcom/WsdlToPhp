<?php
/**
 * Class file for AmazonEc2TypeVolumeStatusActionsSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVolumeStatusActionsSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeVolumeStatusActionsSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeVolumeStatusActionItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeVolumeStatusActionItemType item
	 * @return AmazonEc2TypeVolumeStatusActionsSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param VolumeStatusActionItemType item
	 * @return VolumeStatusActionItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeVolumeStatusActionItemType
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