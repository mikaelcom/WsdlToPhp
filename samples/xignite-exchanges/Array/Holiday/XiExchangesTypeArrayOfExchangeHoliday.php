<?php
/**
 * Class file for XiExchangesTypeArrayOfExchangeHoliday
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeArrayOfExchangeHoliday
 * @date 08/07/2012
 */
class XiExchangesTypeArrayOfExchangeHoliday extends XiExchangesWsdlClass
{
	/**
	 * The ExchangeHoliday
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiExchangesTypeExchangeHoliday
	 */
	public $ExchangeHoliday;
	/**
	 * Constructor
	 * @param XiExchangesTypeExchangeHoliday ExchangeHoliday
	 * @return XiExchangesTypeArrayOfExchangeHoliday
	 */
	public function __construct($_ExchangeHoliday = null)
	{
		parent::__construct(array('ExchangeHoliday'=>$_ExchangeHoliday));
	}
	/**
	 * Set ExchangeHoliday
	 * @param ExchangeHoliday ExchangeHoliday
	 * @return ExchangeHoliday
	 */
	public function setExchangeHoliday($_ExchangeHoliday)
	{
		return ($this->ExchangeHoliday = $_ExchangeHoliday);
	}
	/**
	 * Get ExchangeHoliday
	 * @return XiExchangesTypeExchangeHoliday
	 */
	public function getExchangeHoliday()
	{
		return $this->ExchangeHoliday;
	}
	/**
	 * Returns the current element
	 * @see XiExchangesWsdlClass::current()
	 * @return XiExchangesTypeExchangeHoliday
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiExchangesWsdlClass::item()
	 * @param int
	 * @return XiExchangesTypeExchangeHoliday
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiExchangesWsdlClass::first()
	 * @return XiExchangesTypeExchangeHoliday
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiExchangesWsdlClass::last()
	 * @return XiExchangesTypeExchangeHoliday
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiExchangesWsdlClass::offsetGet()
	 * @param int
	 * @return XiExchangesTypeExchangeHoliday
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ExchangeHoliday'
	 */
	public function getAttributeName()
	{
		return 'ExchangeHoliday';
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