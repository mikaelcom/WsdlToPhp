<?php
/**
 * Class file for XiGlobalHistoricalTypeArrayOfSplitHistory
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeArrayOfSplitHistory
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeArrayOfSplitHistory extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The SplitHistory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalHistoricalTypeSplitHistory
	 */
	public $SplitHistory;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSplitHistory SplitHistory
	 * @return XiGlobalHistoricalTypeArrayOfSplitHistory
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
	 * @return XiGlobalHistoricalTypeSplitHistory
	 */
	public function getSplitHistory()
	{
		return $this->SplitHistory;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalHistoricalWsdlClass::current()
	 * @return XiGlobalHistoricalTypeSplitHistory
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalHistoricalWsdlClass::item()
	 * @param int
	 * @return XiGlobalHistoricalTypeSplitHistory
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::first()
	 * @return XiGlobalHistoricalTypeSplitHistory
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::last()
	 * @return XiGlobalHistoricalTypeSplitHistory
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalHistoricalTypeSplitHistory
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