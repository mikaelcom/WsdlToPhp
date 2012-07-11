<?php
/**
 * Class file for XiFuturesTypeArrayOfTick
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeArrayOfTick
 * @date 08/07/2012
 */
class XiFuturesTypeArrayOfTick extends XiFuturesWsdlClass
{
	/**
	 * The Tick
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFuturesTypeTick
	 */
	public $Tick;
	/**
	 * Constructor
	 * @param XiFuturesTypeTick Tick
	 * @return XiFuturesTypeArrayOfTick
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
	 * @return XiFuturesTypeTick
	 */
	public function getTick()
	{
		return $this->Tick;
	}
	/**
	 * Returns the current element
	 * @see XiFuturesWsdlClass::current()
	 * @return XiFuturesTypeTick
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFuturesWsdlClass::item()
	 * @param int
	 * @return XiFuturesTypeTick
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::first()
	 * @return XiFuturesTypeTick
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::last()
	 * @return XiFuturesTypeTick
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFuturesWsdlClass::offsetGet()
	 * @param int
	 * @return XiFuturesTypeTick
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