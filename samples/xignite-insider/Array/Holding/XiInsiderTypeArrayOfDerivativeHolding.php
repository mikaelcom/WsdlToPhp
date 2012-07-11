<?php
/**
 * Class file for XiInsiderTypeArrayOfDerivativeHolding
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfDerivativeHolding
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfDerivativeHolding extends XiInsiderWsdlClass
{
	/**
	 * The derivativeHolding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeDerivativeHolding
	 */
	public $derivativeHolding;
	/**
	 * Constructor
	 * @param XiInsiderTypeDerivativeHolding derivativeHolding
	 * @return XiInsiderTypeArrayOfDerivativeHolding
	 */
	public function __construct($_derivativeHolding = null)
	{
		parent::__construct(array('derivativeHolding'=>$_derivativeHolding));
	}
	/**
	 * Set derivativeHolding
	 * @param derivativeHolding derivativeHolding
	 * @return derivativeHolding
	 */
	public function setDerivativeHolding($_derivativeHolding)
	{
		return ($this->derivativeHolding = $_derivativeHolding);
	}
	/**
	 * Get derivativeHolding
	 * @return XiInsiderTypederivativeHolding
	 */
	public function getDerivativeHolding()
	{
		return $this->derivativeHolding;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeDerivativeHolding
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeDerivativeHolding
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeDerivativeHolding
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeDerivativeHolding
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeDerivativeHolding
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'derivativeHolding'
	 */
	public function getAttributeName()
	{
		return 'derivativeHolding';
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