<?php
/**
 * Class file for XiRealTimeTypeArrayOfTicks
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeArrayOfTicks
 * @date 08/07/2012
 */
class XiRealTimeTypeArrayOfTicks extends XiRealTimeWsdlClass
{
	/**
	 * The Ticks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRealTimeTypeTicks
	 */
	public $Ticks;
	/**
	 * Constructor
	 * @param XiRealTimeTypeTicks Ticks
	 * @return XiRealTimeTypeArrayOfTicks
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
	 * @return XiRealTimeTypeTicks
	 */
	public function getTicks()
	{
		return $this->Ticks;
	}
	/**
	 * Returns the current element
	 * @see XiRealTimeWsdlClass::current()
	 * @return XiRealTimeTypeTicks
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRealTimeWsdlClass::item()
	 * @param int
	 * @return XiRealTimeTypeTicks
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::first()
	 * @return XiRealTimeTypeTicks
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::last()
	 * @return XiRealTimeTypeTicks
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiRealTimeTypeTicks
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