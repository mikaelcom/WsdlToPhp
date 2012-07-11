<?php
/**
 * Class file for XiBATSRealTimeTypeArrayOfTick
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeArrayOfTick
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeArrayOfTick extends XiBATSRealTimeWsdlClass
{
	/**
	 * The Tick
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBATSRealTimeTypeTick
	 */
	public $Tick;
	/**
	 * Constructor
	 * @param XiBATSRealTimeTypeTick Tick
	 * @return XiBATSRealTimeTypeArrayOfTick
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
	 * @return XiBATSRealTimeTypeTick
	 */
	public function getTick()
	{
		return $this->Tick;
	}
	/**
	 * Returns the current element
	 * @see XiBATSRealTimeWsdlClass::current()
	 * @return XiBATSRealTimeTypeTick
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBATSRealTimeWsdlClass::item()
	 * @param int
	 * @return XiBATSRealTimeTypeTick
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBATSRealTimeWsdlClass::first()
	 * @return XiBATSRealTimeTypeTick
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBATSRealTimeWsdlClass::last()
	 * @return XiBATSRealTimeTypeTick
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBATSRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiBATSRealTimeTypeTick
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