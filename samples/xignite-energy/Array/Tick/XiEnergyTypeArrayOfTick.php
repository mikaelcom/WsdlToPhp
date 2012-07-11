<?php
/**
 * Class file for XiEnergyTypeArrayOfTick
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeArrayOfTick
 * @date 08/07/2012
 */
class XiEnergyTypeArrayOfTick extends XiEnergyWsdlClass
{
	/**
	 * The Tick
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEnergyTypeTick
	 */
	public $Tick;
	/**
	 * Constructor
	 * @param XiEnergyTypeTick Tick
	 * @return XiEnergyTypeArrayOfTick
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
	 * @return XiEnergyTypeTick
	 */
	public function getTick()
	{
		return $this->Tick;
	}
	/**
	 * Returns the current element
	 * @see XiEnergyWsdlClass::current()
	 * @return XiEnergyTypeTick
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEnergyWsdlClass::item()
	 * @param int
	 * @return XiEnergyTypeTick
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::first()
	 * @return XiEnergyTypeTick
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::last()
	 * @return XiEnergyTypeTick
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEnergyWsdlClass::offsetGet()
	 * @param int
	 * @return XiEnergyTypeTick
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