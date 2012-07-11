<?php
/**
 * Class file for XiHistoricalTypeArrayOfHistoricalQuote
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeArrayOfHistoricalQuote
 * @date 08/07/2012
 */
class XiHistoricalTypeArrayOfHistoricalQuote extends XiHistoricalWsdlClass
{
	/**
	 * The HistoricalQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHistoricalTypeHistoricalQuote
	 */
	public $HistoricalQuote;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuote HistoricalQuote
	 * @return XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public function __construct($_HistoricalQuote = null)
	{
		parent::__construct(array('HistoricalQuote'=>$_HistoricalQuote));
	}
	/**
	 * Set HistoricalQuote
	 * @param HistoricalQuote HistoricalQuote
	 * @return HistoricalQuote
	 */
	public function setHistoricalQuote($_HistoricalQuote)
	{
		return ($this->HistoricalQuote = $_HistoricalQuote);
	}
	/**
	 * Get HistoricalQuote
	 * @return XiHistoricalTypeHistoricalQuote
	 */
	public function getHistoricalQuote()
	{
		return $this->HistoricalQuote;
	}
	/**
	 * Returns the current element
	 * @see XiHistoricalWsdlClass::current()
	 * @return XiHistoricalTypeHistoricalQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHistoricalWsdlClass::item()
	 * @param int
	 * @return XiHistoricalTypeHistoricalQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::first()
	 * @return XiHistoricalTypeHistoricalQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::last()
	 * @return XiHistoricalTypeHistoricalQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiHistoricalTypeHistoricalQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'HistoricalQuote'
	 */
	public function getAttributeName()
	{
		return 'HistoricalQuote';
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