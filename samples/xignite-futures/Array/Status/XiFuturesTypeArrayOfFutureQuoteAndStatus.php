<?php
/**
 * Class file for XiFuturesTypeArrayOfFutureQuoteAndStatus
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeArrayOfFutureQuoteAndStatus
 * @date 08/07/2012
 */
class XiFuturesTypeArrayOfFutureQuoteAndStatus extends XiFuturesWsdlClass
{
	/**
	 * The FutureQuoteAndStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFuturesTypeFutureQuoteAndStatus
	 */
	public $FutureQuoteAndStatus;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuoteAndStatus FutureQuoteAndStatus
	 * @return XiFuturesTypeArrayOfFutureQuoteAndStatus
	 */
	public function __construct($_FutureQuoteAndStatus = null)
	{
		parent::__construct(array('FutureQuoteAndStatus'=>$_FutureQuoteAndStatus));
	}
	/**
	 * Set FutureQuoteAndStatus
	 * @param FutureQuoteAndStatus FutureQuoteAndStatus
	 * @return FutureQuoteAndStatus
	 */
	public function setFutureQuoteAndStatus($_FutureQuoteAndStatus)
	{
		return ($this->FutureQuoteAndStatus = $_FutureQuoteAndStatus);
	}
	/**
	 * Get FutureQuoteAndStatus
	 * @return XiFuturesTypeFutureQuoteAndStatus
	 */
	public function getFutureQuoteAndStatus()
	{
		return $this->FutureQuoteAndStatus;
	}
	/**
	 * Returns the current element
	 * @see XiFuturesWsdlClass::current()
	 * @return XiFuturesTypeFutureQuoteAndStatus
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFuturesWsdlClass::item()
	 * @param int
	 * @return XiFuturesTypeFutureQuoteAndStatus
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::first()
	 * @return XiFuturesTypeFutureQuoteAndStatus
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::last()
	 * @return XiFuturesTypeFutureQuoteAndStatus
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::offsetGet()
	 * @param int
	 * @return XiFuturesTypeFutureQuoteAndStatus
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FutureQuoteAndStatus'
	 */
	public function getAttributeName()
	{
		return 'FutureQuoteAndStatus';
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