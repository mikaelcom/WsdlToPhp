<?php
/**
 * Class file for XiFundsTypeArrayOfNewFund
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeArrayOfNewFund
 * @date 08/07/2012
 */
class XiFundsTypeArrayOfNewFund extends XiFundsWsdlClass
{
	/**
	 * The NewFund
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundsTypeNewFund
	 */
	public $NewFund;
	/**
	 * Constructor
	 * @param XiFundsTypeNewFund NewFund
	 * @return XiFundsTypeArrayOfNewFund
	 */
	public function __construct($_NewFund = null)
	{
		parent::__construct(array('NewFund'=>$_NewFund));
	}
	/**
	 * Set NewFund
	 * @param NewFund NewFund
	 * @return NewFund
	 */
	public function setNewFund($_NewFund)
	{
		return ($this->NewFund = $_NewFund);
	}
	/**
	 * Get NewFund
	 * @return XiFundsTypeNewFund
	 */
	public function getNewFund()
	{
		return $this->NewFund;
	}
	/**
	 * Returns the current element
	 * @see XiFundsWsdlClass::current()
	 * @return XiFundsTypeNewFund
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundsWsdlClass::item()
	 * @param int
	 * @return XiFundsTypeNewFund
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundsWsdlClass::first()
	 * @return XiFundsTypeNewFund
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundsWsdlClass::last()
	 * @return XiFundsTypeNewFund
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundsTypeNewFund
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'NewFund'
	 */
	public function getAttributeName()
	{
		return 'NewFund';
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