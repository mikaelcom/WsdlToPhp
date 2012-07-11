<?php
/**
 * Class file for AmazonEc2TypeProductDescriptionSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeProductDescriptionSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeProductDescriptionSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeProductDescriptionSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeProductDescriptionSetItemType item
	 * @return AmazonEc2TypeProductDescriptionSetType
	 */
	public function __construct($_item)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param ProductDescriptionSetItemType item
	 * @return ProductDescriptionSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeProductDescriptionSetItemType
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