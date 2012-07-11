<?php
/**
 * Class file for XiRealTimeTypeArrayOfRealTimeQuote
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeArrayOfRealTimeQuote
 * @date 08/07/2012
 */
class XiRealTimeTypeArrayOfRealTimeQuote extends XiRealTimeWsdlClass
{
	/**
	 * The RealTimeQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRealTimeTypeRealTimeQuote
	 */
	public $RealTimeQuote;
	/**
	 * Constructor
	 * @param XiRealTimeTypeRealTimeQuote RealTimeQuote
	 * @return XiRealTimeTypeArrayOfRealTimeQuote
	 */
	public function __construct($_RealTimeQuote = null)
	{
		parent::__construct(array('RealTimeQuote'=>$_RealTimeQuote));
	}
	/**
	 * Set RealTimeQuote
	 * @param RealTimeQuote RealTimeQuote
	 * @return RealTimeQuote
	 */
	public function setRealTimeQuote($_RealTimeQuote)
	{
		return ($this->RealTimeQuote = $_RealTimeQuote);
	}
	/**
	 * Get RealTimeQuote
	 * @return XiRealTimeTypeRealTimeQuote
	 */
	public function getRealTimeQuote()
	{
		return $this->RealTimeQuote;
	}
	/**
	 * Returns the current element
	 * @see XiRealTimeWsdlClass::current()
	 * @return XiRealTimeTypeRealTimeQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRealTimeWsdlClass::item()
	 * @param int
	 * @return XiRealTimeTypeRealTimeQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::first()
	 * @return XiRealTimeTypeRealTimeQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::last()
	 * @return XiRealTimeTypeRealTimeQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiRealTimeTypeRealTimeQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'RealTimeQuote'
	 */
	public function getAttributeName()
	{
		return 'RealTimeQuote';
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