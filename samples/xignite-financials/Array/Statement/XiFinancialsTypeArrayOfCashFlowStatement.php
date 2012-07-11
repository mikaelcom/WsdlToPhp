<?php
/**
 * Class file for XiFinancialsTypeArrayOfCashFlowStatement
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeArrayOfCashFlowStatement
 * @date 08/07/2012
 */
class XiFinancialsTypeArrayOfCashFlowStatement extends XiFinancialsWsdlClass
{
	/**
	 * The CashFlowStatement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFinancialsTypeCashFlowStatement
	 */
	public $CashFlowStatement;
	/**
	 * Constructor
	 * @param XiFinancialsTypeCashFlowStatement CashFlowStatement
	 * @return XiFinancialsTypeArrayOfCashFlowStatement
	 */
	public function __construct($_CashFlowStatement = null)
	{
		parent::__construct(array('CashFlowStatement'=>$_CashFlowStatement));
	}
	/**
	 * Set CashFlowStatement
	 * @param CashFlowStatement CashFlowStatement
	 * @return CashFlowStatement
	 */
	public function setCashFlowStatement($_CashFlowStatement)
	{
		return ($this->CashFlowStatement = $_CashFlowStatement);
	}
	/**
	 * Get CashFlowStatement
	 * @return XiFinancialsTypeCashFlowStatement
	 */
	public function getCashFlowStatement()
	{
		return $this->CashFlowStatement;
	}
	/**
	 * Returns the current element
	 * @see XiFinancialsWsdlClass::current()
	 * @return XiFinancialsTypeCashFlowStatement
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFinancialsWsdlClass::item()
	 * @param int
	 * @return XiFinancialsTypeCashFlowStatement
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::first()
	 * @return XiFinancialsTypeCashFlowStatement
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::last()
	 * @return XiFinancialsTypeCashFlowStatement
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFinancialsTypeCashFlowStatement
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CashFlowStatement'
	 */
	public function getAttributeName()
	{
		return 'CashFlowStatement';
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