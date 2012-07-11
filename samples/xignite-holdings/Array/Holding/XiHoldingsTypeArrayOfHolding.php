<?php
/**
 * Class file for XiHoldingsTypeArrayOfHolding
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeArrayOfHolding
 * @date 08/07/2012
 */
class XiHoldingsTypeArrayOfHolding extends XiHoldingsWsdlClass
{
	/**
	 * The Holding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHoldingsTypeHolding
	 */
	public $Holding;
	/**
	 * Constructor
	 * @param XiHoldingsTypeHolding Holding
	 * @return XiHoldingsTypeArrayOfHolding
	 */
	public function __construct($_Holding = null)
	{
		parent::__construct(array('Holding'=>$_Holding));
	}
	/**
	 * Set Holding
	 * @param Holding Holding
	 * @return Holding
	 */
	public function setHolding($_Holding)
	{
		return ($this->Holding = $_Holding);
	}
	/**
	 * Get Holding
	 * @return XiHoldingsTypeHolding
	 */
	public function getHolding()
	{
		return $this->Holding;
	}
	/**
	 * Returns the current element
	 * @see XiHoldingsWsdlClass::current()
	 * @return XiHoldingsTypeHolding
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHoldingsWsdlClass::item()
	 * @param int
	 * @return XiHoldingsTypeHolding
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::first()
	 * @return XiHoldingsTypeHolding
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::last()
	 * @return XiHoldingsTypeHolding
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::offsetGet()
	 * @param int
	 * @return XiHoldingsTypeHolding
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Holding'
	 */
	public function getAttributeName()
	{
		return 'Holding';
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