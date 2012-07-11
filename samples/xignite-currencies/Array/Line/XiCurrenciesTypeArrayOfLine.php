<?php
/**
 * Class file for XiCurrenciesTypeArrayOfLine
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfLine
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfLine extends XiCurrenciesWsdlClass
{
	/**
	 * The Line
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeLine
	 */
	public $Line;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeLine Line
	 * @return XiCurrenciesTypeArrayOfLine
	 */
	public function __construct($_Line = null)
	{
		parent::__construct(array('Line'=>$_Line));
	}
	/**
	 * Set Line
	 * @param Line Line
	 * @return Line
	 */
	public function setLine($_Line)
	{
		return ($this->Line = $_Line);
	}
	/**
	 * Get Line
	 * @return XiCurrenciesTypeLine
	 */
	public function getLine()
	{
		return $this->Line;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeLine
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeLine
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeLine
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeLine
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeLine
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Line'
	 */
	public function getAttributeName()
	{
		return 'Line';
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