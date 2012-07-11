<?php
/**
 * Class file for XiNewsTypeArrayOfTicker
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeArrayOfTicker
 * @date 08/07/2012
 */
class XiNewsTypeArrayOfTicker extends XiNewsWsdlClass
{
	/**
	 * The Ticker
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiNewsTypeTicker
	 */
	public $Ticker;
	/**
	 * Constructor
	 * @param XiNewsTypeTicker Ticker
	 * @return XiNewsTypeArrayOfTicker
	 */
	public function __construct($_Ticker = null)
	{
		parent::__construct(array('Ticker'=>$_Ticker));
	}
	/**
	 * Set Ticker
	 * @param Ticker Ticker
	 * @return Ticker
	 */
	public function setTicker($_Ticker)
	{
		return ($this->Ticker = $_Ticker);
	}
	/**
	 * Get Ticker
	 * @return XiNewsTypeTicker
	 */
	public function getTicker()
	{
		return $this->Ticker;
	}
	/**
	 * Returns the current element
	 * @see XiNewsWsdlClass::current()
	 * @return XiNewsTypeTicker
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiNewsWsdlClass::item()
	 * @param int
	 * @return XiNewsTypeTicker
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::first()
	 * @return XiNewsTypeTicker
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::last()
	 * @return XiNewsTypeTicker
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::offsetGet()
	 * @param int
	 * @return XiNewsTypeTicker
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Ticker'
	 */
	public function getAttributeName()
	{
		return 'Ticker';
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