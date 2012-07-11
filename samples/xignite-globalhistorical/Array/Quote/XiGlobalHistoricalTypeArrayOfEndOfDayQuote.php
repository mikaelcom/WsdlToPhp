<?php
/**
 * Class file for XiGlobalHistoricalTypeArrayOfEndOfDayQuote
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeArrayOfEndOfDayQuote
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeArrayOfEndOfDayQuote extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The EndOfDayQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalHistoricalTypeEndOfDayQuote
	 */
	public $EndOfDayQuote;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeEndOfDayQuote EndOfDayQuote
	 * @return XiGlobalHistoricalTypeArrayOfEndOfDayQuote
	 */
	public function __construct($_EndOfDayQuote = null)
	{
		parent::__construct(array('EndOfDayQuote'=>$_EndOfDayQuote));
	}
	/**
	 * Set EndOfDayQuote
	 * @param EndOfDayQuote EndOfDayQuote
	 * @return EndOfDayQuote
	 */
	public function setEndOfDayQuote($_EndOfDayQuote)
	{
		return ($this->EndOfDayQuote = $_EndOfDayQuote);
	}
	/**
	 * Get EndOfDayQuote
	 * @return XiGlobalHistoricalTypeEndOfDayQuote
	 */
	public function getEndOfDayQuote()
	{
		return $this->EndOfDayQuote;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalHistoricalWsdlClass::current()
	 * @return XiGlobalHistoricalTypeEndOfDayQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalHistoricalWsdlClass::item()
	 * @param int
	 * @return XiGlobalHistoricalTypeEndOfDayQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::first()
	 * @return XiGlobalHistoricalTypeEndOfDayQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::last()
	 * @return XiGlobalHistoricalTypeEndOfDayQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalHistoricalTypeEndOfDayQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'EndOfDayQuote'
	 */
	public function getAttributeName()
	{
		return 'EndOfDayQuote';
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