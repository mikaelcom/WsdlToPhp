<?php
/**
 * Class file for XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GlobalHistoricalQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public $GlobalHistoricalQuote;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalHistoricalQuote GlobalHistoricalQuote
	 * @return XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote
	 */
	public function __construct($_GlobalHistoricalQuote = null)
	{
		parent::__construct(array('GlobalHistoricalQuote'=>$_GlobalHistoricalQuote));
	}
	/**
	 * Set GlobalHistoricalQuote
	 * @param GlobalHistoricalQuote GlobalHistoricalQuote
	 * @return GlobalHistoricalQuote
	 */
	public function setGlobalHistoricalQuote($_GlobalHistoricalQuote)
	{
		return ($this->GlobalHistoricalQuote = $_GlobalHistoricalQuote);
	}
	/**
	 * Get GlobalHistoricalQuote
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public function getGlobalHistoricalQuote()
	{
		return $this->GlobalHistoricalQuote;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalHistoricalWsdlClass::current()
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalHistoricalWsdlClass::item()
	 * @param int
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::first()
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::last()
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'GlobalHistoricalQuote'
	 */
	public function getAttributeName()
	{
		return 'GlobalHistoricalQuote';
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