<?php
/**
 * Class file for XiGlobalquotesTypeArrayOfGlobalQuote
 * @date 08/07/2012
 */
/**
 * Class XiGlobalquotesTypeArrayOfGlobalQuote
 * @date 08/07/2012
 */
class XiGlobalquotesTypeArrayOfGlobalQuote extends XiGlobalquotesWsdlClass
{
	/**
	 * The GlobalQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalquotesTypeGlobalQuote
	 */
	public $GlobalQuote;
	/**
	 * Constructor
	 * @param XiGlobalquotesTypeGlobalQuote GlobalQuote
	 * @return XiGlobalquotesTypeArrayOfGlobalQuote
	 */
	public function __construct($_GlobalQuote = null)
	{
		parent::__construct(array('GlobalQuote'=>$_GlobalQuote));
	}
	/**
	 * Set GlobalQuote
	 * @param GlobalQuote GlobalQuote
	 * @return GlobalQuote
	 */
	public function setGlobalQuote($_GlobalQuote)
	{
		return ($this->GlobalQuote = $_GlobalQuote);
	}
	/**
	 * Get GlobalQuote
	 * @return XiGlobalquotesTypeGlobalQuote
	 */
	public function getGlobalQuote()
	{
		return $this->GlobalQuote;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalquotesWsdlClass::current()
	 * @return XiGlobalquotesTypeGlobalQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalquotesWsdlClass::item()
	 * @param int
	 * @return XiGlobalquotesTypeGlobalQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalquotesWsdlClass::first()
	 * @return XiGlobalquotesTypeGlobalQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalquotesWsdlClass::last()
	 * @return XiGlobalquotesTypeGlobalQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalquotesWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalquotesTypeGlobalQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'GlobalQuote'
	 */
	public function getAttributeName()
	{
		return 'GlobalQuote';
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