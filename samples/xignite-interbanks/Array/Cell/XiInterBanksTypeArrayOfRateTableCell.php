<?php
/**
 * Class file for XiInterBanksTypeArrayOfRateTableCell
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeArrayOfRateTableCell
 * @date 08/07/2012
 */
class XiInterBanksTypeArrayOfRateTableCell extends XiInterBanksWsdlClass
{
	/**
	 * The RateTableCell
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInterBanksTypeRateTableCell
	 */
	public $RateTableCell;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateTableCell RateTableCell
	 * @return XiInterBanksTypeArrayOfRateTableCell
	 */
	public function __construct($_RateTableCell = null)
	{
		parent::__construct(array('RateTableCell'=>$_RateTableCell));
	}
	/**
	 * Set RateTableCell
	 * @param RateTableCell RateTableCell
	 * @return RateTableCell
	 */
	public function setRateTableCell($_RateTableCell)
	{
		return ($this->RateTableCell = $_RateTableCell);
	}
	/**
	 * Get RateTableCell
	 * @return XiInterBanksTypeRateTableCell
	 */
	public function getRateTableCell()
	{
		return $this->RateTableCell;
	}
	/**
	 * Returns the current element
	 * @see XiInterBanksWsdlClass::current()
	 * @return XiInterBanksTypeRateTableCell
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInterBanksWsdlClass::item()
	 * @param int
	 * @return XiInterBanksTypeRateTableCell
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::first()
	 * @return XiInterBanksTypeRateTableCell
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::last()
	 * @return XiInterBanksTypeRateTableCell
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::offsetGet()
	 * @param int
	 * @return XiInterBanksTypeRateTableCell
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'RateTableCell'
	 */
	public function getAttributeName()
	{
		return 'RateTableCell';
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