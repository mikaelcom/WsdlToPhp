<?php
/**
 * Class file for AmazonEc2TypeConversionTaskIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeConversionTaskIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeConversionTaskIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeConversionTaskIdItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeConversionTaskIdItemType item
	 * @return AmazonEc2TypeConversionTaskIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param ConversionTaskIdItemType item
	 * @return ConversionTaskIdItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeConversionTaskIdItemType
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