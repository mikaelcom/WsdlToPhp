<?php
/**
 * Class file for XiBATSRealTimeTypeArrayOfRealQuote
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeArrayOfRealQuote
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeArrayOfRealQuote extends XiBATSRealTimeWsdlClass
{
	/**
	 * The RealQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBATSRealTimeTypeRealQuote
	 */
	public $RealQuote;
	/**
	 * Constructor
	 * @param XiBATSRealTimeTypeRealQuote RealQuote
	 * @return XiBATSRealTimeTypeArrayOfRealQuote
	 */
	public function __construct($_RealQuote = null)
	{
		parent::__construct(array('RealQuote'=>$_RealQuote));
	}
	/**
	 * Set RealQuote
	 * @param RealQuote RealQuote
	 * @return RealQuote
	 */
	public function setRealQuote($_RealQuote)
	{
		return ($this->RealQuote = $_RealQuote);
	}
	/**
	 * Get RealQuote
	 * @return XiBATSRealTimeTypeRealQuote
	 */
	public function getRealQuote()
	{
		return $this->RealQuote;
	}
	/**
	 * Returns the current element
	 * @see XiBATSRealTimeWsdlClass::current()
	 * @return XiBATSRealTimeTypeRealQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBATSRealTimeWsdlClass::item()
	 * @param int
	 * @return XiBATSRealTimeTypeRealQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBATSRealTimeWsdlClass::first()
	 * @return XiBATSRealTimeTypeRealQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBATSRealTimeWsdlClass::last()
	 * @return XiBATSRealTimeTypeRealQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBATSRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiBATSRealTimeTypeRealQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'RealQuote'
	 */
	public function getAttributeName()
	{
		return 'RealQuote';
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