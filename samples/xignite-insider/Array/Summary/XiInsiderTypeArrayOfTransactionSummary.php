<?php
/**
 * Class file for XiInsiderTypeArrayOfTransactionSummary
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfTransactionSummary
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfTransactionSummary extends XiInsiderWsdlClass
{
	/**
	 * The TransactionSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeTransactionSummary
	 */
	public $TransactionSummary;
	/**
	 * Constructor
	 * @param XiInsiderTypeTransactionSummary TransactionSummary
	 * @return XiInsiderTypeArrayOfTransactionSummary
	 */
	public function __construct($_TransactionSummary = null)
	{
		parent::__construct(array('TransactionSummary'=>$_TransactionSummary));
	}
	/**
	 * Set TransactionSummary
	 * @param TransactionSummary TransactionSummary
	 * @return TransactionSummary
	 */
	public function setTransactionSummary($_TransactionSummary)
	{
		return ($this->TransactionSummary = $_TransactionSummary);
	}
	/**
	 * Get TransactionSummary
	 * @return XiInsiderTypeTransactionSummary
	 */
	public function getTransactionSummary()
	{
		return $this->TransactionSummary;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeTransactionSummary
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeTransactionSummary
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeTransactionSummary
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeTransactionSummary
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeTransactionSummary
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'TransactionSummary'
	 */
	public function getAttributeName()
	{
		return 'TransactionSummary';
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