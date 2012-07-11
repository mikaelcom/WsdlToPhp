<?php
/**
 * Class file for XiFundamentalsTypeArrayOfSymbol
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeArrayOfSymbol
 * @date 08/07/2012
 */
class XiFundamentalsTypeArrayOfSymbol extends XiFundamentalsWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundamentalsTypeSymbol
	 */
	public $Symbol;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeSymbol Symbol
	 * @return XiFundamentalsTypeArrayOfSymbol
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
	 * @return XiFundamentalsTypeSymbol
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Returns the current element
	 * @see XiFundamentalsWsdlClass::current()
	 * @return XiFundamentalsTypeSymbol
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundamentalsWsdlClass::item()
	 * @param int
	 * @return XiFundamentalsTypeSymbol
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::first()
	 * @return XiFundamentalsTypeSymbol
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::last()
	 * @return XiFundamentalsTypeSymbol
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundamentalsTypeSymbol
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