<?php
/**
 * Class file for XiFuturesTypeArrayOfFuture
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeArrayOfFuture
 * @date 08/07/2012
 */
class XiFuturesTypeArrayOfFuture extends XiFuturesWsdlClass
{
	/**
	 * The Future
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFuturesTypeFuture
	 */
	public $Future;
	/**
	 * Constructor
	 * @param XiFuturesTypeFuture Future
	 * @return XiFuturesTypeArrayOfFuture
	 */
	public function __construct($_Future = null)
	{
		parent::__construct(array('Future'=>$_Future));
	}
	/**
	 * Set Future
	 * @param Future Future
	 * @return Future
	 */
	public function setFuture($_Future)
	{
		return ($this->Future = $_Future);
	}
	/**
	 * Get Future
	 * @return XiFuturesTypeFuture
	 */
	public function getFuture()
	{
		return $this->Future;
	}
	/**
	 * Returns the current element
	 * @see XiFuturesWsdlClass::current()
	 * @return XiFuturesTypeFuture
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFuturesWsdlClass::item()
	 * @param int
	 * @return XiFuturesTypeFuture
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::first()
	 * @return XiFuturesTypeFuture
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::last()
	 * @return XiFuturesTypeFuture
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::offsetGet()
	 * @param int
	 * @return XiFuturesTypeFuture
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Future'
	 */
	public function getAttributeName()
	{
		return 'Future';
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