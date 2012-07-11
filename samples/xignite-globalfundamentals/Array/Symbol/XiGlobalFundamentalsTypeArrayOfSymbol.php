<?php
/**
 * Class file for XiGlobalFundamentalsTypeArrayOfSymbol
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeArrayOfSymbol
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeArrayOfSymbol extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalFundamentalsTypeSymbol
	 */
	public $Symbol;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeSymbol Symbol
	 * @return XiGlobalFundamentalsTypeArrayOfSymbol
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
	 * @return XiGlobalFundamentalsTypeSymbol
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalFundamentalsWsdlClass::current()
	 * @return XiGlobalFundamentalsTypeSymbol
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalFundamentalsWsdlClass::item()
	 * @param int
	 * @return XiGlobalFundamentalsTypeSymbol
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalFundamentalsWsdlClass::first()
	 * @return XiGlobalFundamentalsTypeSymbol
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalFundamentalsWsdlClass::last()
	 * @return XiGlobalFundamentalsTypeSymbol
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalFundamentalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalFundamentalsTypeSymbol
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