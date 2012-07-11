<?php
/**
 * Class file for XiFinancialsTypeArrayOfRestatedSymbol
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeArrayOfRestatedSymbol
 * @date 08/07/2012
 */
class XiFinancialsTypeArrayOfRestatedSymbol extends XiFinancialsWsdlClass
{
	/**
	 * The RestatedSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFinancialsTypeRestatedSymbol
	 */
	public $RestatedSymbol;
	/**
	 * Constructor
	 * @param XiFinancialsTypeRestatedSymbol RestatedSymbol
	 * @return XiFinancialsTypeArrayOfRestatedSymbol
	 */
	public function __construct($_RestatedSymbol = null)
	{
		parent::__construct(array('RestatedSymbol'=>$_RestatedSymbol));
	}
	/**
	 * Set RestatedSymbol
	 * @param RestatedSymbol RestatedSymbol
	 * @return RestatedSymbol
	 */
	public function setRestatedSymbol($_RestatedSymbol)
	{
		return ($this->RestatedSymbol = $_RestatedSymbol);
	}
	/**
	 * Get RestatedSymbol
	 * @return XiFinancialsTypeRestatedSymbol
	 */
	public function getRestatedSymbol()
	{
		return $this->RestatedSymbol;
	}
	/**
	 * Returns the current element
	 * @see XiFinancialsWsdlClass::current()
	 * @return XiFinancialsTypeRestatedSymbol
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFinancialsWsdlClass::item()
	 * @param int
	 * @return XiFinancialsTypeRestatedSymbol
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::first()
	 * @return XiFinancialsTypeRestatedSymbol
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::last()
	 * @return XiFinancialsTypeRestatedSymbol
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFinancialsTypeRestatedSymbol
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'RestatedSymbol'
	 */
	public function getAttributeName()
	{
		return 'RestatedSymbol';
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