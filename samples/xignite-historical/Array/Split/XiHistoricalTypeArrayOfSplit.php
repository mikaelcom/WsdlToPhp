<?php
/**
 * Class file for XiHistoricalTypeArrayOfSplit
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeArrayOfSplit
 * @date 08/07/2012
 */
class XiHistoricalTypeArrayOfSplit extends XiHistoricalWsdlClass
{
	/**
	 * The Split
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHistoricalTypeSplit
	 */
	public $Split;
	/**
	 * Constructor
	 * @param XiHistoricalTypeSplit Split
	 * @return XiHistoricalTypeArrayOfSplit
	 */
	public function __construct($_Split = null)
	{
		parent::__construct(array('Split'=>$_Split));
	}
	/**
	 * Set Split
	 * @param Split Split
	 * @return Split
	 */
	public function setSplit($_Split)
	{
		return ($this->Split = $_Split);
	}
	/**
	 * Get Split
	 * @return XiHistoricalTypeSplit
	 */
	public function getSplit()
	{
		return $this->Split;
	}
	/**
	 * Returns the current element
	 * @see XiHistoricalWsdlClass::current()
	 * @return XiHistoricalTypeSplit
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHistoricalWsdlClass::item()
	 * @param int
	 * @return XiHistoricalTypeSplit
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::first()
	 * @return XiHistoricalTypeSplit
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::last()
	 * @return XiHistoricalTypeSplit
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiHistoricalTypeSplit
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Split'
	 */
	public function getAttributeName()
	{
		return 'Split';
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