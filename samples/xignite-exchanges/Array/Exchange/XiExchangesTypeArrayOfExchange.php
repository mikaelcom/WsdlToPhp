<?php
/**
 * Class file for XiExchangesTypeArrayOfExchange
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeArrayOfExchange
 * @date 08/07/2012
 */
class XiExchangesTypeArrayOfExchange extends XiExchangesWsdlClass
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiExchangesTypeExchange
	 */
	public $Exchange;
	/**
	 * Constructor
	 * @param XiExchangesTypeExchange Exchange
	 * @return XiExchangesTypeArrayOfExchange
	 */
	public function __construct($_Exchange = null)
	{
		parent::__construct(array('Exchange'=>$_Exchange));
	}
	/**
	 * Set Exchange
	 * @param Exchange Exchange
	 * @return Exchange
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = $_Exchange);
	}
	/**
	 * Get Exchange
	 * @return XiExchangesTypeExchange
	 */
	public function getExchange()
	{
		return $this->Exchange;
	}
	/**
	 * Returns the current element
	 * @see XiExchangesWsdlClass::current()
	 * @return XiExchangesTypeExchange
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiExchangesWsdlClass::item()
	 * @param int
	 * @return XiExchangesTypeExchange
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiExchangesWsdlClass::first()
	 * @return XiExchangesTypeExchange
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiExchangesWsdlClass::last()
	 * @return XiExchangesTypeExchange
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiExchangesWsdlClass::offsetGet()
	 * @param int
	 * @return XiExchangesTypeExchange
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Exchange'
	 */
	public function getAttributeName()
	{
		return 'Exchange';
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