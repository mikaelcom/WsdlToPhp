<?php
/**
 * Class file for XiQuotesTypeArrayOfQuickQuote
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeArrayOfQuickQuote
 * @date 08/07/2012
 */
class XiQuotesTypeArrayOfQuickQuote extends XiQuotesWsdlClass
{
	/**
	 * The QuickQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiQuotesTypeQuickQuote
	 */
	public $QuickQuote;
	/**
	 * Constructor
	 * @param XiQuotesTypeQuickQuote QuickQuote
	 * @return XiQuotesTypeArrayOfQuickQuote
	 */
	public function __construct($_QuickQuote = null)
	{
		parent::__construct(array('QuickQuote'=>$_QuickQuote));
	}
	/**
	 * Set QuickQuote
	 * @param QuickQuote QuickQuote
	 * @return QuickQuote
	 */
	public function setQuickQuote($_QuickQuote)
	{
		return ($this->QuickQuote = $_QuickQuote);
	}
	/**
	 * Get QuickQuote
	 * @return XiQuotesTypeQuickQuote
	 */
	public function getQuickQuote()
	{
		return $this->QuickQuote;
	}
	/**
	 * Returns the current element
	 * @see XiQuotesWsdlClass::current()
	 * @return XiQuotesTypeQuickQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiQuotesWsdlClass::item()
	 * @param int
	 * @return XiQuotesTypeQuickQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::first()
	 * @return XiQuotesTypeQuickQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::last()
	 * @return XiQuotesTypeQuickQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::offsetGet()
	 * @param int
	 * @return XiQuotesTypeQuickQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'QuickQuote'
	 */
	public function getAttributeName()
	{
		return 'QuickQuote';
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