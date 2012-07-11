<?php
/**
 * Class file for XiEarningsCalendarTypeArrayOfSymbol
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeArrayOfSymbol
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeArrayOfSymbol extends XiEarningsCalendarWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEarningsCalendarTypeSymbol
	 */
	public $Symbol;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeSymbol Symbol
	 * @return XiEarningsCalendarTypeArrayOfSymbol
	 */
	public function __construct($_Symbol = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol));
	}
	/**
	 * Set Symbol
	 * @param Symbol Symbol
	 * @return Symbol
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return XiEarningsCalendarTypeSymbol
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Returns the current element
	 * @see XiEarningsCalendarWsdlClass::current()
	 * @return XiEarningsCalendarTypeSymbol
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEarningsCalendarWsdlClass::item()
	 * @param int
	 * @return XiEarningsCalendarTypeSymbol
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::first()
	 * @return XiEarningsCalendarTypeSymbol
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::last()
	 * @return XiEarningsCalendarTypeSymbol
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEarningsCalendarTypeSymbol
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Symbol'
	 */
	public function getAttributeName()
	{
		return 'Symbol';
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