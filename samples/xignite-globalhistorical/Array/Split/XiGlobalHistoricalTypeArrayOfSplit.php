<?php
/**
 * Class file for XiGlobalHistoricalTypeArrayOfSplit
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeArrayOfSplit
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeArrayOfSplit extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The Split
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalHistoricalTypeSplit
	 */
	public $Split;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSplit Split
	 * @return XiGlobalHistoricalTypeArrayOfSplit
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
	 * @return XiGlobalHistoricalTypeSplit
	 */
	public function getSplit()
	{
		return $this->Split;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalHistoricalWsdlClass::current()
	 * @return XiGlobalHistoricalTypeSplit
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalHistoricalWsdlClass::item()
	 * @param int
	 * @return XiGlobalHistoricalTypeSplit
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::first()
	 * @return XiGlobalHistoricalTypeSplit
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::last()
	 * @return XiGlobalHistoricalTypeSplit
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalHistoricalTypeSplit
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