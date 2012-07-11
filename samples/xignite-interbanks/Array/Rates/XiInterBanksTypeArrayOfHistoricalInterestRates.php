<?php
/**
 * Class file for XiInterBanksTypeArrayOfHistoricalInterestRates
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeArrayOfHistoricalInterestRates
 * @date 08/07/2012
 */
class XiInterBanksTypeArrayOfHistoricalInterestRates extends XiInterBanksWsdlClass
{
	/**
	 * The HistoricalInterestRates
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInterBanksTypeHistoricalInterestRates
	 */
	public $HistoricalInterestRates;
	/**
	 * Constructor
	 * @param XiInterBanksTypeHistoricalInterestRates HistoricalInterestRates
	 * @return XiInterBanksTypeArrayOfHistoricalInterestRates
	 */
	public function __construct($_HistoricalInterestRates = null)
	{
		parent::__construct(array('HistoricalInterestRates'=>$_HistoricalInterestRates));
	}
	/**
	 * Set HistoricalInterestRates
	 * @param HistoricalInterestRates HistoricalInterestRates
	 * @return HistoricalInterestRates
	 */
	public function setHistoricalInterestRates($_HistoricalInterestRates)
	{
		return ($this->HistoricalInterestRates = $_HistoricalInterestRates);
	}
	/**
	 * Get HistoricalInterestRates
	 * @return XiInterBanksTypeHistoricalInterestRates
	 */
	public function getHistoricalInterestRates()
	{
		return $this->HistoricalInterestRates;
	}
	/**
	 * Returns the current element
	 * @see XiInterBanksWsdlClass::current()
	 * @return XiInterBanksTypeHistoricalInterestRates
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInterBanksWsdlClass::item()
	 * @param int
	 * @return XiInterBanksTypeHistoricalInterestRates
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::first()
	 * @return XiInterBanksTypeHistoricalInterestRates
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::last()
	 * @return XiInterBanksTypeHistoricalInterestRates
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInterBanksWsdlClass::offsetGet()
	 * @param int
	 * @return XiInterBanksTypeHistoricalInterestRates
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'HistoricalInterestRates'
	 */
	public function getAttributeName()
	{
		return 'HistoricalInterestRates';
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