<?php
/**
 * Class file for XiFinancialsTypeArrayOfIncomeStatement
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeArrayOfIncomeStatement
 * @date 08/07/2012
 */
class XiFinancialsTypeArrayOfIncomeStatement extends XiFinancialsWsdlClass
{
	/**
	 * The IncomeStatement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFinancialsTypeIncomeStatement
	 */
	public $IncomeStatement;
	/**
	 * Constructor
	 * @param XiFinancialsTypeIncomeStatement IncomeStatement
	 * @return XiFinancialsTypeArrayOfIncomeStatement
	 */
	public function __construct($_IncomeStatement = null)
	{
		parent::__construct(array('IncomeStatement'=>$_IncomeStatement));
	}
	/**
	 * Set IncomeStatement
	 * @param IncomeStatement IncomeStatement
	 * @return IncomeStatement
	 */
	public function setIncomeStatement($_IncomeStatement)
	{
		return ($this->IncomeStatement = $_IncomeStatement);
	}
	/**
	 * Get IncomeStatement
	 * @return XiFinancialsTypeIncomeStatement
	 */
	public function getIncomeStatement()
	{
		return $this->IncomeStatement;
	}
	/**
	 * Returns the current element
	 * @see XiFinancialsWsdlClass::current()
	 * @return XiFinancialsTypeIncomeStatement
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFinancialsWsdlClass::item()
	 * @param int
	 * @return XiFinancialsTypeIncomeStatement
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::first()
	 * @return XiFinancialsTypeIncomeStatement
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::last()
	 * @return XiFinancialsTypeIncomeStatement
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFinancialsTypeIncomeStatement
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'IncomeStatement'
	 */
	public function getAttributeName()
	{
		return 'IncomeStatement';
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