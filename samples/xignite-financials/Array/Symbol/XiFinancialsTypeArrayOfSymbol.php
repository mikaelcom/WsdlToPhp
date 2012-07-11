<?php
/**
 * Class file for XiFinancialsTypeArrayOfSymbol
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeArrayOfSymbol
 * @date 08/07/2012
 */
class XiFinancialsTypeArrayOfSymbol extends XiFinancialsWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFinancialsTypeSymbol
	 */
	public $Symbol;
	/**
	 * Constructor
	 * @param XiFinancialsTypeSymbol Symbol
	 * @return XiFinancialsTypeArrayOfSymbol
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
	 * @return XiFinancialsTypeSymbol
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Returns the current element
	 * @see XiFinancialsWsdlClass::current()
	 * @return XiFinancialsTypeSymbol
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFinancialsWsdlClass::item()
	 * @param int
	 * @return XiFinancialsTypeSymbol
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::first()
	 * @return XiFinancialsTypeSymbol
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::last()
	 * @return XiFinancialsTypeSymbol
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFinancialsTypeSymbol
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