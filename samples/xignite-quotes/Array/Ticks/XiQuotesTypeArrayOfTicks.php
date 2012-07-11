<?php
/**
 * Class file for XiQuotesTypeArrayOfTicks
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeArrayOfTicks
 * @date 08/07/2012
 */
class XiQuotesTypeArrayOfTicks extends XiQuotesWsdlClass
{
	/**
	 * The Ticks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiQuotesTypeTicks
	 */
	public $Ticks;
	/**
	 * Constructor
	 * @param XiQuotesTypeTicks Ticks
	 * @return XiQuotesTypeArrayOfTicks
	 */
	public function __construct($_Ticks = null)
	{
		parent::__construct(array('Ticks'=>$_Ticks));
	}
	/**
	 * Set Ticks
	 * @param Ticks Ticks
	 * @return Ticks
	 */
	public function setTicks($_Ticks)
	{
		return ($this->Ticks = $_Ticks);
	}
	/**
	 * Get Ticks
	 * @return XiQuotesTypeTicks
	 */
	public function getTicks()
	{
		return $this->Ticks;
	}
	/**
	 * Returns the current element
	 * @see XiQuotesWsdlClass::current()
	 * @return XiQuotesTypeTicks
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiQuotesWsdlClass::item()
	 * @param int
	 * @return XiQuotesTypeTicks
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::first()
	 * @return XiQuotesTypeTicks
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::last()
	 * @return XiQuotesTypeTicks
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::offsetGet()
	 * @param int
	 * @return XiQuotesTypeTicks
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Ticks'
	 */
	public function getAttributeName()
	{
		return 'Ticks';
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