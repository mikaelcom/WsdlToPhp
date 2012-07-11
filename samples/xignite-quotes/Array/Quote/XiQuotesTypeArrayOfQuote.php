<?php
/**
 * Class file for XiQuotesTypeArrayOfQuote
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeArrayOfQuote
 * @date 08/07/2012
 */
class XiQuotesTypeArrayOfQuote extends XiQuotesWsdlClass
{
	/**
	 * The Quote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiQuotesTypeQuote
	 */
	public $Quote;
	/**
	 * Constructor
	 * @param XiQuotesTypeQuote Quote
	 * @return XiQuotesTypeArrayOfQuote
	 */
	public function __construct($_Quote = null)
	{
		parent::__construct(array('Quote'=>$_Quote));
	}
	/**
	 * Set Quote
	 * @param Quote Quote
	 * @return Quote
	 */
	public function setQuote($_Quote)
	{
		return ($this->Quote = $_Quote);
	}
	/**
	 * Get Quote
	 * @return XiQuotesTypeQuote
	 */
	public function getQuote()
	{
		return $this->Quote;
	}
	/**
	 * Returns the current element
	 * @see XiQuotesWsdlClass::current()
	 * @return XiQuotesTypeQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiQuotesWsdlClass::item()
	 * @param int
	 * @return XiQuotesTypeQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::first()
	 * @return XiQuotesTypeQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::last()
	 * @return XiQuotesTypeQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::offsetGet()
	 * @param int
	 * @return XiQuotesTypeQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Quote'
	 */
	public function getAttributeName()
	{
		return 'Quote';
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