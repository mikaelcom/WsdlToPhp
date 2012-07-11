<?php
/**
 * Class file for XiFuturesTypeArrayOfExchange
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeArrayOfExchange
 * @date 08/07/2012
 */
class XiFuturesTypeArrayOfExchange extends XiFuturesWsdlClass
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFuturesTypeExchange
	 */
	public $Exchange;
	/**
	 * Constructor
	 * @param XiFuturesTypeExchange Exchange
	 * @return XiFuturesTypeArrayOfExchange
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
	 * @return XiFuturesTypeExchange
	 */
	public function getExchange()
	{
		return $this->Exchange;
	}
	/**
	 * Returns the current element
	 * @see XiFuturesWsdlClass::current()
	 * @return XiFuturesTypeExchange
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFuturesWsdlClass::item()
	 * @param int
	 * @return XiFuturesTypeExchange
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::first()
	 * @return XiFuturesTypeExchange
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::last()
	 * @return XiFuturesTypeExchange
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::offsetGet()
	 * @param int
	 * @return XiFuturesTypeExchange
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