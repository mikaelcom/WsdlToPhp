<?php
/**
 * Class file for XiGlobalquotesTypeArrayOfTick
 * @date 08/07/2012
 */
/**
 * Class XiGlobalquotesTypeArrayOfTick
 * @date 08/07/2012
 */
class XiGlobalquotesTypeArrayOfTick extends XiGlobalquotesWsdlClass
{
	/**
	 * The Tick
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalquotesTypeTick
	 */
	public $Tick;
	/**
	 * Constructor
	 * @param XiGlobalquotesTypeTick Tick
	 * @return XiGlobalquotesTypeArrayOfTick
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
	 * @return XiGlobalquotesTypeTick
	 */
	public function getTick()
	{
		return $this->Tick;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalquotesWsdlClass::current()
	 * @return XiGlobalquotesTypeTick
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalquotesWsdlClass::item()
	 * @param int
	 * @return XiGlobalquotesTypeTick
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalquotesWsdlClass::first()
	 * @return XiGlobalquotesTypeTick
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalquotesWsdlClass::last()
	 * @return XiGlobalquotesTypeTick
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalquotesWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalquotesTypeTick
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