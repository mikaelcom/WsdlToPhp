<?php
/**
 * Class file for AmazonEc2TypeVolumeStatusDetailsSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVolumeStatusDetailsSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeVolumeStatusDetailsSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeVolumeStatusDetailsItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeVolumeStatusDetailsItemType item
	 * @return AmazonEc2TypeVolumeStatusDetailsSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param VolumeStatusDetailsItemType item
	 * @return VolumeStatusDetailsItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeVolumeStatusDetailsItemType
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