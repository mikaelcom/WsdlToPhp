<?php
/**
 * Class file for AmazonEc2TypeProductCodesSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeProductCodesSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeProductCodesSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeProductCodesSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeProductCodesSetItemType item
	 * @return AmazonEc2TypeProductCodesSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param ProductCodesSetItemType item
	 * @return ProductCodesSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeProductCodesSetItemType
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