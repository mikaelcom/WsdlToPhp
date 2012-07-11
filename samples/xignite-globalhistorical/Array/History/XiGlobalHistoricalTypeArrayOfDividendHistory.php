<?php
/**
 * Class file for XiGlobalHistoricalTypeArrayOfDividendHistory
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeArrayOfDividendHistory
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeArrayOfDividendHistory extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The DividendHistory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalHistoricalTypeDividendHistory
	 */
	public $DividendHistory;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeDividendHistory DividendHistory
	 * @return XiGlobalHistoricalTypeArrayOfDividendHistory
	 */
	public function __construct($_DividendHistory = null)
	{
		parent::__construct(array('DividendHistory'=>$_DividendHistory));
	}
	/**
	 * Set DividendHistory
	 * @param DividendHistory DividendHistory
	 * @return DividendHistory
	 */
	public function setDividendHistory($_DividendHistory)
	{
		return ($this->DividendHistory = $_DividendHistory);
	}
	/**
	 * Get DividendHistory
	 * @return XiGlobalHistoricalTypeDividendHistory
	 */
	public function getDividendHistory()
	{
		return $this->DividendHistory;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalHistoricalWsdlClass::current()
	 * @return XiGlobalHistoricalTypeDividendHistory
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalHistoricalWsdlClass::item()
	 * @param int
	 * @return XiGlobalHistoricalTypeDividendHistory
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::first()
	 * @return XiGlobalHistoricalTypeDividendHistory
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::last()
	 * @return XiGlobalHistoricalTypeDividendHistory
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalHistoricalTypeDividendHistory
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'DividendHistory'
	 */
	public function getAttributeName()
	{
		return 'DividendHistory';
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