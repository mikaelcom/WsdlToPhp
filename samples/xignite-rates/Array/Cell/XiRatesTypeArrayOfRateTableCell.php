<?php
/**
 * Class file for XiRatesTypeArrayOfRateTableCell
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfRateTableCell
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfRateTableCell extends XiRatesWsdlClass
{
	/**
	 * The RateTableCell
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRatesTypeRateTableCell
	 */
	public $RateTableCell;
	/**
	 * Constructor
	 * @param XiRatesTypeRateTableCell RateTableCell
	 * @return XiRatesTypeArrayOfRateTableCell
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
	 * @return XiRatesTypeRateTableCell
	 */
	public function getRateTableCell()
	{
		return $this->RateTableCell;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return XiRatesTypeRateTableCell
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return XiRatesTypeRateTableCell
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return XiRatesTypeRateTableCell
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return XiRatesTypeRateTableCell
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiRatesTypeRateTableCell
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