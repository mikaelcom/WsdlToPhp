<?php
/**
 * Class file for XiRealTimeTypeArrayOfTick
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeArrayOfTick
 * @date 08/07/2012
 */
class XiRealTimeTypeArrayOfTick extends XiRealTimeWsdlClass
{
	/**
	 * The Tick
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRealTimeTypeTick
	 */
	public $Tick;
	/**
	 * Constructor
	 * @param XiRealTimeTypeTick Tick
	 * @return XiRealTimeTypeArrayOfTick
	 */
	public function __construct($_Tick = null)
	{
		parent::__construct(array('Tick'=>$_Tick));
	}
	/**
	 * Set Tick
	 * @param Tick Tick
	 * @return Tick
	 */
	public function setTick($_Tick)
	{
		return ($this->Tick = $_Tick);
	}
	/**
	 * Get Tick
	 * @return XiRealTimeTypeTick
	 */
	public function getTick()
	{
		return $this->Tick;
	}
	/**
	 * Returns the current element
	 * @see XiRealTimeWsdlClass::current()
	 * @return XiRealTimeTypeTick
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRealTimeWsdlClass::item()
	 * @param int
	 * @return XiRealTimeTypeTick
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::first()
	 * @return XiRealTimeTypeTick
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::last()
	 * @return XiRealTimeTypeTick
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiRealTimeTypeTick
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Tick'
	 */
	public function getAttributeName()
	{
		return 'Tick';
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