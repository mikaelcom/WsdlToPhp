<?php
/**
 * Class file for XiFinancialsTypeArrayOfBalanceSheet
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeArrayOfBalanceSheet
 * @date 08/07/2012
 */
class XiFinancialsTypeArrayOfBalanceSheet extends XiFinancialsWsdlClass
{
	/**
	 * The BalanceSheet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFinancialsTypeBalanceSheet
	 */
	public $BalanceSheet;
	/**
	 * Constructor
	 * @param XiFinancialsTypeBalanceSheet BalanceSheet
	 * @return XiFinancialsTypeArrayOfBalanceSheet
	 */
	public function __construct($_BalanceSheet = null)
	{
		parent::__construct(array('BalanceSheet'=>$_BalanceSheet));
	}
	/**
	 * Set BalanceSheet
	 * @param BalanceSheet BalanceSheet
	 * @return BalanceSheet
	 */
	public function setBalanceSheet($_BalanceSheet)
	{
		return ($this->BalanceSheet = $_BalanceSheet);
	}
	/**
	 * Get BalanceSheet
	 * @return XiFinancialsTypeBalanceSheet
	 */
	public function getBalanceSheet()
	{
		return $this->BalanceSheet;
	}
	/**
	 * Returns the current element
	 * @see XiFinancialsWsdlClass::current()
	 * @return XiFinancialsTypeBalanceSheet
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFinancialsWsdlClass::item()
	 * @param int
	 * @return XiFinancialsTypeBalanceSheet
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::first()
	 * @return XiFinancialsTypeBalanceSheet
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::last()
	 * @return XiFinancialsTypeBalanceSheet
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFinancialsTypeBalanceSheet
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'BalanceSheet'
	 */
	public function getAttributeName()
	{
		return 'BalanceSheet';
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