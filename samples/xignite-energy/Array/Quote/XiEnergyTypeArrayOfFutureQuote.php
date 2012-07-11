<?php
/**
 * Class file for XiEnergyTypeArrayOfFutureQuote
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeArrayOfFutureQuote
 * @date 08/07/2012
 */
class XiEnergyTypeArrayOfFutureQuote extends XiEnergyWsdlClass
{
	/**
	 * The FutureQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEnergyTypeFutureQuote
	 */
	public $FutureQuote;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureQuote FutureQuote
	 * @return XiEnergyTypeArrayOfFutureQuote
	 */
	public function __construct($_FutureQuote = null)
	{
		parent::__construct(array('FutureQuote'=>$_FutureQuote));
	}
	/**
	 * Set FutureQuote
	 * @param FutureQuote FutureQuote
	 * @return FutureQuote
	 */
	public function setFutureQuote($_FutureQuote)
	{
		return ($this->FutureQuote = $_FutureQuote);
	}
	/**
	 * Get FutureQuote
	 * @return XiEnergyTypeFutureQuote
	 */
	public function getFutureQuote()
	{
		return $this->FutureQuote;
	}
	/**
	 * Returns the current element
	 * @see XiEnergyWsdlClass::current()
	 * @return XiEnergyTypeFutureQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEnergyWsdlClass::item()
	 * @param int
	 * @return XiEnergyTypeFutureQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::first()
	 * @return XiEnergyTypeFutureQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::last()
	 * @return XiEnergyTypeFutureQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::offsetGet()
	 * @param int
	 * @return XiEnergyTypeFutureQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FutureQuote'
	 */
	public function getAttributeName()
	{
		return 'FutureQuote';
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