<?php
/**
 * Class file for XiInsiderTypeArrayOfDerivativeTransaction
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfDerivativeTransaction
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfDerivativeTransaction extends XiInsiderWsdlClass
{
	/**
	 * The derivativeTransaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeDerivativeTransaction
	 */
	public $derivativeTransaction;
	/**
	 * Constructor
	 * @param XiInsiderTypeDerivativeTransaction derivativeTransaction
	 * @return XiInsiderTypeArrayOfDerivativeTransaction
	 */
	public function __construct($_derivativeTransaction = null)
	{
		parent::__construct(array('derivativeTransaction'=>$_derivativeTransaction));
	}
	/**
	 * Set derivativeTransaction
	 * @param derivativeTransaction derivativeTransaction
	 * @return derivativeTransaction
	 */
	public function setDerivativeTransaction($_derivativeTransaction)
	{
		return ($this->derivativeTransaction = $_derivativeTransaction);
	}
	/**
	 * Get derivativeTransaction
	 * @return XiInsiderTypederivativeTransaction
	 */
	public function getDerivativeTransaction()
	{
		return $this->derivativeTransaction;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeDerivativeTransaction
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeDerivativeTransaction
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeDerivativeTransaction
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeDerivativeTransaction
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeDerivativeTransaction
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'derivativeTransaction'
	 */
	public function getAttributeName()
	{
		return 'derivativeTransaction';
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