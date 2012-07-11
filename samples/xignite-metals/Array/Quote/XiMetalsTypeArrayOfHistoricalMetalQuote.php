<?php
/**
 * Class file for XiMetalsTypeArrayOfHistoricalMetalQuote
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeArrayOfHistoricalMetalQuote
 * @date 08/07/2012
 */
class XiMetalsTypeArrayOfHistoricalMetalQuote extends XiMetalsWsdlClass
{
	/**
	 * The HistoricalMetalQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiMetalsTypeHistoricalMetalQuote
	 */
	public $HistoricalMetalQuote;
	/**
	 * Constructor
	 * @param XiMetalsTypeHistoricalMetalQuote HistoricalMetalQuote
	 * @return XiMetalsTypeArrayOfHistoricalMetalQuote
	 */
	public function __construct($_HistoricalMetalQuote = null)
	{
		parent::__construct(array('HistoricalMetalQuote'=>$_HistoricalMetalQuote));
	}
	/**
	 * Set HistoricalMetalQuote
	 * @param HistoricalMetalQuote HistoricalMetalQuote
	 * @return HistoricalMetalQuote
	 */
	public function setHistoricalMetalQuote($_HistoricalMetalQuote)
	{
		return ($this->HistoricalMetalQuote = $_HistoricalMetalQuote);
	}
	/**
	 * Get HistoricalMetalQuote
	 * @return XiMetalsTypeHistoricalMetalQuote
	 */
	public function getHistoricalMetalQuote()
	{
		return $this->HistoricalMetalQuote;
	}
	/**
	 * Returns the current element
	 * @see XiMetalsWsdlClass::current()
	 * @return XiMetalsTypeHistoricalMetalQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiMetalsWsdlClass::item()
	 * @param int
	 * @return XiMetalsTypeHistoricalMetalQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::first()
	 * @return XiMetalsTypeHistoricalMetalQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::last()
	 * @return XiMetalsTypeHistoricalMetalQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiMetalsTypeHistoricalMetalQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'HistoricalMetalQuote'
	 */
	public function getAttributeName()
	{
		return 'HistoricalMetalQuote';
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