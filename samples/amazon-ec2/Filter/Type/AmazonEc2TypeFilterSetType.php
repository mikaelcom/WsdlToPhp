<?php
/**
 * Class file for AmazonEc2TypeFilterSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeFilterSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeFilterSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeFilterType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeFilterType item
	 * @return AmazonEc2TypeFilterSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param FilterType item
	 * @return FilterType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeFilterType
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