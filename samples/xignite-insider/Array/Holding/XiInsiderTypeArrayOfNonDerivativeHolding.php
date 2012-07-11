<?php
/**
 * Class file for XiInsiderTypeArrayOfNonDerivativeHolding
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfNonDerivativeHolding
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfNonDerivativeHolding extends XiInsiderWsdlClass
{
	/**
	 * The nonDerivativeHolding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeNonDerivativeHolding
	 */
	public $nonDerivativeHolding;
	/**
	 * Constructor
	 * @param XiInsiderTypeNonDerivativeHolding nonDerivativeHolding
	 * @return XiInsiderTypeArrayOfNonDerivativeHolding
	 */
	public function __construct($_nonDerivativeHolding = null)
	{
		parent::__construct(array('nonDerivativeHolding'=>$_nonDerivativeHolding));
	}
	/**
	 * Set nonDerivativeHolding
	 * @param nonDerivativeHolding nonDerivativeHolding
	 * @return nonDerivativeHolding
	 */
	public function setNonDerivativeHolding($_nonDerivativeHolding)
	{
		return ($this->nonDerivativeHolding = $_nonDerivativeHolding);
	}
	/**
	 * Get nonDerivativeHolding
	 * @return XiInsiderTypenonDerivativeHolding
	 */
	public function getNonDerivativeHolding()
	{
		return $this->nonDerivativeHolding;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeNonDerivativeHolding
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeNonDerivativeHolding
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeNonDerivativeHolding
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeNonDerivativeHolding
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeNonDerivativeHolding
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'nonDerivativeHolding'
	 */
	public function getAttributeName()
	{
		return 'nonDerivativeHolding';
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