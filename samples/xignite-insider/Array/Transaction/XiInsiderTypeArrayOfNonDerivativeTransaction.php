<?php
/**
 * Class file for XiInsiderTypeArrayOfNonDerivativeTransaction
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfNonDerivativeTransaction
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfNonDerivativeTransaction extends XiInsiderWsdlClass
{
	/**
	 * The nonDerivativeTransaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeNonDerivativeTransaction
	 */
	public $nonDerivativeTransaction;
	/**
	 * Constructor
	 * @param XiInsiderTypeNonDerivativeTransaction nonDerivativeTransaction
	 * @return XiInsiderTypeArrayOfNonDerivativeTransaction
	 */
	public function __construct($_nonDerivativeTransaction = null)
	{
		parent::__construct(array('nonDerivativeTransaction'=>$_nonDerivativeTransaction));
	}
	/**
	 * Set nonDerivativeTransaction
	 * @param nonDerivativeTransaction nonDerivativeTransaction
	 * @return nonDerivativeTransaction
	 */
	public function setNonDerivativeTransaction($_nonDerivativeTransaction)
	{
		return ($this->nonDerivativeTransaction = $_nonDerivativeTransaction);
	}
	/**
	 * Get nonDerivativeTransaction
	 * @return XiInsiderTypenonDerivativeTransaction
	 */
	public function getNonDerivativeTransaction()
	{
		return $this->nonDerivativeTransaction;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeNonDerivativeTransaction
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeNonDerivativeTransaction
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeNonDerivativeTransaction
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeNonDerivativeTransaction
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeNonDerivativeTransaction
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'nonDerivativeTransaction'
	 */
	public function getAttributeName()
	{
		return 'nonDerivativeTransaction';
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