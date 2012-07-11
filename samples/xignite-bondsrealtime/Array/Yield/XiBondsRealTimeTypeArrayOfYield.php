<?php
/**
 * Class file for XiBondsRealTimeTypeArrayOfYield
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeArrayOfYield
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeArrayOfYield extends XiBondsRealTimeWsdlClass
{
	/**
	 * The Yield
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsRealTimeTypeYield
	 */
	public $Yield;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeYield Yield
	 * @return XiBondsRealTimeTypeArrayOfYield
	 */
	public function __construct($_Yield = null)
	{
		parent::__construct(array('Yield'=>$_Yield));
	}
	/**
	 * Set Yield
	 * @param Yield Yield
	 * @return Yield
	 */
	public function setYield($_Yield)
	{
		return ($this->Yield = $_Yield);
	}
	/**
	 * Get Yield
	 * @return XiBondsRealTimeTypeYield
	 */
	public function getYield()
	{
		return $this->Yield;
	}
	/**
	 * Returns the current element
	 * @see XiBondsRealTimeWsdlClass::current()
	 * @return XiBondsRealTimeTypeYield
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsRealTimeWsdlClass::item()
	 * @param int
	 * @return XiBondsRealTimeTypeYield
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::first()
	 * @return XiBondsRealTimeTypeYield
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::last()
	 * @return XiBondsRealTimeTypeYield
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsRealTimeTypeYield
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Yield'
	 */
	public function getAttributeName()
	{
		return 'Yield';
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