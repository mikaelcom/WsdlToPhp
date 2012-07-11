<?php
/**
 * Class file for XiExchangesTypeArrayOfExchangeStatus
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeArrayOfExchangeStatus
 * @date 08/07/2012
 */
class XiExchangesTypeArrayOfExchangeStatus extends XiExchangesWsdlClass
{
	/**
	 * The ExchangeStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiExchangesTypeExchangeStatus
	 */
	public $ExchangeStatus;
	/**
	 * Constructor
	 * @param XiExchangesTypeExchangeStatus ExchangeStatus
	 * @return XiExchangesTypeArrayOfExchangeStatus
	 */
	public function __construct($_ExchangeStatus = null)
	{
		parent::__construct(array('ExchangeStatus'=>$_ExchangeStatus));
	}
	/**
	 * Set ExchangeStatus
	 * @param ExchangeStatus ExchangeStatus
	 * @return ExchangeStatus
	 */
	public function setExchangeStatus($_ExchangeStatus)
	{
		return ($this->ExchangeStatus = $_ExchangeStatus);
	}
	/**
	 * Get ExchangeStatus
	 * @return XiExchangesTypeExchangeStatus
	 */
	public function getExchangeStatus()
	{
		return $this->ExchangeStatus;
	}
	/**
	 * Returns the current element
	 * @see XiExchangesWsdlClass::current()
	 * @return XiExchangesTypeExchangeStatus
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiExchangesWsdlClass::item()
	 * @param int
	 * @return XiExchangesTypeExchangeStatus
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiExchangesWsdlClass::first()
	 * @return XiExchangesTypeExchangeStatus
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiExchangesWsdlClass::last()
	 * @return XiExchangesTypeExchangeStatus
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiExchangesWsdlClass::offsetGet()
	 * @param int
	 * @return XiExchangesTypeExchangeStatus
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ExchangeStatus'
	 */
	public function getAttributeName()
	{
		return 'ExchangeStatus';
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