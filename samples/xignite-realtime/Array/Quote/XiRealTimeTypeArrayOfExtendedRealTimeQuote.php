<?php
/**
 * Class file for XiRealTimeTypeArrayOfExtendedRealTimeQuote
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeArrayOfExtendedRealTimeQuote
 * @date 08/07/2012
 */
class XiRealTimeTypeArrayOfExtendedRealTimeQuote extends XiRealTimeWsdlClass
{
	/**
	 * The ExtendedRealTimeQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRealTimeTypeExtendedRealTimeQuote
	 */
	public $ExtendedRealTimeQuote;
	/**
	 * Constructor
	 * @param XiRealTimeTypeExtendedRealTimeQuote ExtendedRealTimeQuote
	 * @return XiRealTimeTypeArrayOfExtendedRealTimeQuote
	 */
	public function __construct($_ExtendedRealTimeQuote = null)
	{
		parent::__construct(array('ExtendedRealTimeQuote'=>$_ExtendedRealTimeQuote));
	}
	/**
	 * Set ExtendedRealTimeQuote
	 * @param ExtendedRealTimeQuote ExtendedRealTimeQuote
	 * @return ExtendedRealTimeQuote
	 */
	public function setExtendedRealTimeQuote($_ExtendedRealTimeQuote)
	{
		return ($this->ExtendedRealTimeQuote = $_ExtendedRealTimeQuote);
	}
	/**
	 * Get ExtendedRealTimeQuote
	 * @return XiRealTimeTypeExtendedRealTimeQuote
	 */
	public function getExtendedRealTimeQuote()
	{
		return $this->ExtendedRealTimeQuote;
	}
	/**
	 * Returns the current element
	 * @see XiRealTimeWsdlClass::current()
	 * @return XiRealTimeTypeExtendedRealTimeQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRealTimeWsdlClass::item()
	 * @param int
	 * @return XiRealTimeTypeExtendedRealTimeQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::first()
	 * @return XiRealTimeTypeExtendedRealTimeQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::last()
	 * @return XiRealTimeTypeExtendedRealTimeQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiRealTimeTypeExtendedRealTimeQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ExtendedRealTimeQuote'
	 */
	public function getAttributeName()
	{
		return 'ExtendedRealTimeQuote';
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