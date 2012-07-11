<?php
/**
 * Class file for AmazonEc2TypeImportInstanceGroupSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeImportInstanceGroupSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeImportInstanceGroupSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeImportInstanceGroupItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeImportInstanceGroupItemType item
	 * @return AmazonEc2TypeImportInstanceGroupSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param ImportInstanceGroupItemType item
	 * @return ImportInstanceGroupItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeImportInstanceGroupItemType
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