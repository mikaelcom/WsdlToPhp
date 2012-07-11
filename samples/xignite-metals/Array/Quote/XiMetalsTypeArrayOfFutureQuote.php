<?php
/**
 * Class file for XiMetalsTypeArrayOfFutureQuote
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeArrayOfFutureQuote
 * @date 08/07/2012
 */
class XiMetalsTypeArrayOfFutureQuote extends XiMetalsWsdlClass
{
	/**
	 * The FutureQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiMetalsTypeFutureQuote
	 */
	public $FutureQuote;
	/**
	 * Constructor
	 * @param XiMetalsTypeFutureQuote FutureQuote
	 * @return XiMetalsTypeArrayOfFutureQuote
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
	 * @return XiMetalsTypeFutureQuote
	 */
	public function getFutureQuote()
	{
		return $this->FutureQuote;
	}
	/**
	 * Returns the current element
	 * @see XiMetalsWsdlClass::current()
	 * @return XiMetalsTypeFutureQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiMetalsWsdlClass::item()
	 * @param int
	 * @return XiMetalsTypeFutureQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::first()
	 * @return XiMetalsTypeFutureQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::last()
	 * @return XiMetalsTypeFutureQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiMetalsTypeFutureQuote
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