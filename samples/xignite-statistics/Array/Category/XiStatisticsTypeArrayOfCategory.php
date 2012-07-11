<?php
/**
 * Class file for XiStatisticsTypeArrayOfCategory
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeArrayOfCategory
 * @date 08/07/2012
 */
class XiStatisticsTypeArrayOfCategory extends XiStatisticsWsdlClass
{
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiStatisticsTypeCategory
	 */
	public $Category;
	/**
	 * Constructor
	 * @param XiStatisticsTypeCategory Category
	 * @return XiStatisticsTypeArrayOfCategory
	 */
	public function __construct($_Category = null)
	{
		parent::__construct(array('Category'=>$_Category));
	}
	/**
	 * Set Category
	 * @param Category Category
	 * @return Category
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = $_Category);
	}
	/**
	 * Get Category
	 * @return XiStatisticsTypeCategory
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Returns the current element
	 * @see XiStatisticsWsdlClass::current()
	 * @return XiStatisticsTypeCategory
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiStatisticsWsdlClass::item()
	 * @param int
	 * @return XiStatisticsTypeCategory
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiStatisticsWsdlClass::first()
	 * @return XiStatisticsTypeCategory
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiStatisticsWsdlClass::last()
	 * @return XiStatisticsTypeCategory
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiStatisticsWsdlClass::offsetGet()
	 * @param int
	 * @return XiStatisticsTypeCategory
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Category'
	 */
	public function getAttributeName()
	{
		return 'Category';
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