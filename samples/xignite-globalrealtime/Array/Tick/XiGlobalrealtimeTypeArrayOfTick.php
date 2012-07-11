<?php
/**
 * Class file for XiGlobalrealtimeTypeArrayOfTick
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeArrayOfTick
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeArrayOfTick extends XiGlobalrealtimeWsdlClass
{
	/**
	 * The Tick
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalrealtimeTypeTick
	 */
	public $Tick;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeTypeTick Tick
	 * @return XiGlobalrealtimeTypeArrayOfTick
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
	 * @return XiGlobalrealtimeTypeTick
	 */
	public function getTick()
	{
		return $this->Tick;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalrealtimeWsdlClass::current()
	 * @return XiGlobalrealtimeTypeTick
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalrealtimeWsdlClass::item()
	 * @param int
	 * @return XiGlobalrealtimeTypeTick
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeWsdlClass::first()
	 * @return XiGlobalrealtimeTypeTick
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeWsdlClass::last()
	 * @return XiGlobalrealtimeTypeTick
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalrealtimeTypeTick
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