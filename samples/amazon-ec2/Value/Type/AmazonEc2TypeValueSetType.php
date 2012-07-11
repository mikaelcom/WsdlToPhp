<?php
/**
 * Class file for AmazonEc2TypeValueSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeValueSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeValueSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeValueType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeValueType item
	 * @return AmazonEc2TypeValueSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param ValueType item
	 * @return ValueType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeValueType
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