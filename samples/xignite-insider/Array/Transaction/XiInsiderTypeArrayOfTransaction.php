<?php
/**
 * Class file for XiInsiderTypeArrayOfTransaction
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfTransaction
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfTransaction extends XiInsiderWsdlClass
{
	/**
	 * The Transaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeTransaction
	 */
	public $Transaction;
	/**
	 * Constructor
	 * @param XiInsiderTypeTransaction Transaction
	 * @return XiInsiderTypeArrayOfTransaction
	 */
	public function __construct($_Transaction = null)
	{
		parent::__construct(array('Transaction'=>$_Transaction));
	}
	/**
	 * Set Transaction
	 * @param Transaction Transaction
	 * @return Transaction
	 */
	public function setTransaction($_Transaction)
	{
		return ($this->Transaction = $_Transaction);
	}
	/**
	 * Get Transaction
	 * @return XiInsiderTypeTransaction
	 */
	public function getTransaction()
	{
		return $this->Transaction;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeTransaction
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeTransaction
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeTransaction
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeTransaction
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeTransaction
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Transaction'
	 */
	public function getAttributeName()
	{
		return 'Transaction';
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