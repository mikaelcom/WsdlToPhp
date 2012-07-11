<?php
/**
 * Class file for XiFuturesTypeArrayOfFutureQuote
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeArrayOfFutureQuote
 * @date 08/07/2012
 */
class XiFuturesTypeArrayOfFutureQuote extends XiFuturesWsdlClass
{
	/**
	 * The FutureQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFuturesTypeFutureQuote
	 */
	public $FutureQuote;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuote FutureQuote
	 * @return XiFuturesTypeArrayOfFutureQuote
	 */
	public function __construct($_FutureQuote = null)
	{
		parent::__construct(array('FutureQuote'=>$_FutureQuote));
	}
	/**
	 * Set FutureQuote
	 * @param FutureQuote FutureQuote
	 * @return FutureQuote
	 */
	public function setFutureQuote($_FutureQuote)
	{
		return ($this->FutureQuote = $_FutureQuote);
	}
	/**
	 * Get FutureQuote
	 * @return XiFuturesTypeFutureQuote
	 */
	public function getFutureQuote()
	{
		return $this->FutureQuote;
	}
	/**
	 * Returns the current element
	 * @see XiFuturesWsdlClass::current()
	 * @return XiFuturesTypeFutureQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFuturesWsdlClass::item()
	 * @param int
	 * @return XiFuturesTypeFutureQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::first()
	 * @return XiFuturesTypeFutureQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::last()
	 * @return XiFuturesTypeFutureQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::offsetGet()
	 * @param int
	 * @return XiFuturesTypeFutureQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FutureQuote'
	 */
	public function getAttributeName()
	{
		return 'FutureQuote';
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