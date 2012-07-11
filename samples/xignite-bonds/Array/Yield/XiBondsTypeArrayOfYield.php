<?php
/**
 * Class file for XiBondsTypeArrayOfYield
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeArrayOfYield
 * @date 08/07/2012
 */
class XiBondsTypeArrayOfYield extends XiBondsWsdlClass
{
	/**
	 * The Yield
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsTypeYield
	 */
	public $Yield;
	/**
	 * Constructor
	 * @param XiBondsTypeYield Yield
	 * @return XiBondsTypeArrayOfYield
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
	 * @return XiBondsTypeYield
	 */
	public function getYield()
	{
		return $this->Yield;
	}
	/**
	 * Returns the current element
	 * @see XiBondsWsdlClass::current()
	 * @return XiBondsTypeYield
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsWsdlClass::item()
	 * @param int
	 * @return XiBondsTypeYield
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::first()
	 * @return XiBondsTypeYield
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::last()
	 * @return XiBondsTypeYield
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsTypeYield
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