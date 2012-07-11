<?php
/**
 * Class file for XiExchangesTypeArrayOfExchangeHours
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeArrayOfExchangeHours
 * @date 08/07/2012
 */
class XiExchangesTypeArrayOfExchangeHours extends XiExchangesWsdlClass
{
	/**
	 * The ExchangeHours
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiExchangesTypeExchangeHours
	 */
	public $ExchangeHours;
	/**
	 * Constructor
	 * @param XiExchangesTypeExchangeHours ExchangeHours
	 * @return XiExchangesTypeArrayOfExchangeHours
	 */
	public function __construct($_ExchangeHours = null)
	{
		parent::__construct(array('ExchangeHours'=>$_ExchangeHours));
	}
	/**
	 * Set ExchangeHours
	 * @param ExchangeHours ExchangeHours
	 * @return ExchangeHours
	 */
	public function setExchangeHours($_ExchangeHours)
	{
		return ($this->ExchangeHours = $_ExchangeHours);
	}
	/**
	 * Get ExchangeHours
	 * @return XiExchangesTypeExchangeHours
	 */
	public function getExchangeHours()
	{
		return $this->ExchangeHours;
	}
	/**
	 * Returns the current element
	 * @see XiExchangesWsdlClass::current()
	 * @return XiExchangesTypeExchangeHours
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiExchangesWsdlClass::item()
	 * @param int
	 * @return XiExchangesTypeExchangeHours
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiExchangesWsdlClass::first()
	 * @return XiExchangesTypeExchangeHours
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiExchangesWsdlClass::last()
	 * @return XiExchangesTypeExchangeHours
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiExchangesWsdlClass::offsetGet()
	 * @param int
	 * @return XiExchangesTypeExchangeHours
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ExchangeHours'
	 */
	public function getAttributeName()
	{
		return 'ExchangeHours';
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