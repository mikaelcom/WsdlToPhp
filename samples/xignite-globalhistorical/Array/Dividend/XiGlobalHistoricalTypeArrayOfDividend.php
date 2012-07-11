<?php
/**
 * Class file for XiGlobalHistoricalTypeArrayOfDividend
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeArrayOfDividend
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeArrayOfDividend extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The Dividend
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalHistoricalTypeDividend
	 */
	public $Dividend;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeDividend Dividend
	 * @return XiGlobalHistoricalTypeArrayOfDividend
	 */
	public function __construct($_Dividend = null)
	{
		parent::__construct(array('Dividend'=>$_Dividend));
	}
	/**
	 * Set Dividend
	 * @param Dividend Dividend
	 * @return Dividend
	 */
	public function setDividend($_Dividend)
	{
		return ($this->Dividend = $_Dividend);
	}
	/**
	 * Get Dividend
	 * @return XiGlobalHistoricalTypeDividend
	 */
	public function getDividend()
	{
		return $this->Dividend;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalHistoricalWsdlClass::current()
	 * @return XiGlobalHistoricalTypeDividend
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalHistoricalWsdlClass::item()
	 * @param int
	 * @return XiGlobalHistoricalTypeDividend
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::first()
	 * @return XiGlobalHistoricalTypeDividend
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::last()
	 * @return XiGlobalHistoricalTypeDividend
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalHistoricalTypeDividend
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Dividend'
	 */
	public function getAttributeName()
	{
		return 'Dividend';
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