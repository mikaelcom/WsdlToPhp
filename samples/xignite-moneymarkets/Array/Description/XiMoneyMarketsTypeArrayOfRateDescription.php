<?php
/**
 * Class file for XiMoneyMarketsTypeArrayOfRateDescription
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeArrayOfRateDescription
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeArrayOfRateDescription extends XiMoneyMarketsWsdlClass
{
	/**
	 * The RateDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiMoneyMarketsTypeRateDescription
	 */
	public $RateDescription;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeRateDescription RateDescription
	 * @return XiMoneyMarketsTypeArrayOfRateDescription
	 */
	public function __construct($_RateDescription = null)
	{
		parent::__construct(array('RateDescription'=>$_RateDescription));
	}
	/**
	 * Set RateDescription
	 * @param RateDescription RateDescription
	 * @return RateDescription
	 */
	public function setRateDescription($_RateDescription)
	{
		return ($this->RateDescription = $_RateDescription);
	}
	/**
	 * Get RateDescription
	 * @return XiMoneyMarketsTypeRateDescription
	 */
	public function getRateDescription()
	{
		return $this->RateDescription;
	}
	/**
	 * Returns the current element
	 * @see XiMoneyMarketsWsdlClass::current()
	 * @return XiMoneyMarketsTypeRateDescription
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiMoneyMarketsWsdlClass::item()
	 * @param int
	 * @return XiMoneyMarketsTypeRateDescription
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::first()
	 * @return XiMoneyMarketsTypeRateDescription
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::last()
	 * @return XiMoneyMarketsTypeRateDescription
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::offsetGet()
	 * @param int
	 * @return XiMoneyMarketsTypeRateDescription
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'RateDescription'
	 */
	public function getAttributeName()
	{
		return 'RateDescription';
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