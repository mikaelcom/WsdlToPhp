<?php
/**
 * Class file for XiHistoricalTypeArrayOfSplitHistory
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeArrayOfSplitHistory
 * @date 08/07/2012
 */
class XiHistoricalTypeArrayOfSplitHistory extends XiHistoricalWsdlClass
{
	/**
	 * The SplitHistory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHistoricalTypeSplitHistory
	 */
	public $SplitHistory;
	/**
	 * Constructor
	 * @param XiHistoricalTypeSplitHistory SplitHistory
	 * @return XiHistoricalTypeArrayOfSplitHistory
	 */
	public function __construct($_SplitHistory = null)
	{
		parent::__construct(array('SplitHistory'=>$_SplitHistory));
	}
	/**
	 * Set SplitHistory
	 * @param SplitHistory SplitHistory
	 * @return SplitHistory
	 */
	public function setSplitHistory($_SplitHistory)
	{
		return ($this->SplitHistory = $_SplitHistory);
	}
	/**
	 * Get SplitHistory
	 * @return XiHistoricalTypeSplitHistory
	 */
	public function getSplitHistory()
	{
		return $this->SplitHistory;
	}
	/**
	 * Returns the current element
	 * @see XiHistoricalWsdlClass::current()
	 * @return XiHistoricalTypeSplitHistory
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHistoricalWsdlClass::item()
	 * @param int
	 * @return XiHistoricalTypeSplitHistory
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::first()
	 * @return XiHistoricalTypeSplitHistory
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::last()
	 * @return XiHistoricalTypeSplitHistory
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiHistoricalTypeSplitHistory
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SplitHistory'
	 */
	public function getAttributeName()
	{
		return 'SplitHistory';
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