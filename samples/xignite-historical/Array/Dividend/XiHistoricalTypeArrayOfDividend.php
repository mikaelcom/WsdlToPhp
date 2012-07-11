<?php
/**
 * Class file for XiHistoricalTypeArrayOfDividend
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeArrayOfDividend
 * @date 08/07/2012
 */
class XiHistoricalTypeArrayOfDividend extends XiHistoricalWsdlClass
{
	/**
	 * The Dividend
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHistoricalTypeDividend
	 */
	public $Dividend;
	/**
	 * Constructor
	 * @param XiHistoricalTypeDividend Dividend
	 * @return XiHistoricalTypeArrayOfDividend
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
	 * @return XiHistoricalTypeDividend
	 */
	public function getDividend()
	{
		return $this->Dividend;
	}
	/**
	 * Returns the current element
	 * @see XiHistoricalWsdlClass::current()
	 * @return XiHistoricalTypeDividend
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHistoricalWsdlClass::item()
	 * @param int
	 * @return XiHistoricalTypeDividend
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::first()
	 * @return XiHistoricalTypeDividend
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::last()
	 * @return XiHistoricalTypeDividend
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiHistoricalTypeDividend
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