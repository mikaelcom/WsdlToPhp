<?php
/**
 * Class file for AmazonEc2TypeProductCodeListType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeProductCodeListType
 * @date 10/07/2012
 */
class AmazonEc2TypeProductCodeListType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeProductCodeItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeProductCodeItemType item
	 * @return AmazonEc2TypeProductCodeListType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param ProductCodeItemType item
	 * @return ProductCodeItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeProductCodeItemType
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