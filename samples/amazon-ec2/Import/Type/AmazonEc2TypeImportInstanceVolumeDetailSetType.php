<?php
/**
 * Class file for AmazonEc2TypeImportInstanceVolumeDetailSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeImportInstanceVolumeDetailSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeImportInstanceVolumeDetailSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeImportInstanceVolumeDetailItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeImportInstanceVolumeDetailItemType item
	 * @return AmazonEc2TypeImportInstanceVolumeDetailSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param ImportInstanceVolumeDetailItemType item
	 * @return ImportInstanceVolumeDetailItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeImportInstanceVolumeDetailItemType
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