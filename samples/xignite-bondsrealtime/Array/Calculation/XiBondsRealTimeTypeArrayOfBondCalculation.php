<?php
/**
 * Class file for XiBondsRealTimeTypeArrayOfBondCalculation
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeArrayOfBondCalculation
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeArrayOfBondCalculation extends XiBondsRealTimeWsdlClass
{
	/**
	 * The BondCalculation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsRealTimeTypeBondCalculation
	 */
	public $BondCalculation;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeBondCalculation BondCalculation
	 * @return XiBondsRealTimeTypeArrayOfBondCalculation
	 */
	public function __construct($_BondCalculation = null)
	{
		parent::__construct(array('BondCalculation'=>$_BondCalculation));
	}
	/**
	 * Set BondCalculation
	 * @param BondCalculation BondCalculation
	 * @return BondCalculation
	 */
	public function setBondCalculation($_BondCalculation)
	{
		return ($this->BondCalculation = $_BondCalculation);
	}
	/**
	 * Get BondCalculation
	 * @return XiBondsRealTimeTypeBondCalculation
	 */
	public function getBondCalculation()
	{
		return $this->BondCalculation;
	}
	/**
	 * Returns the current element
	 * @see XiBondsRealTimeWsdlClass::current()
	 * @return XiBondsRealTimeTypeBondCalculation
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsRealTimeWsdlClass::item()
	 * @param int
	 * @return XiBondsRealTimeTypeBondCalculation
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::first()
	 * @return XiBondsRealTimeTypeBondCalculation
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::last()
	 * @return XiBondsRealTimeTypeBondCalculation
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsRealTimeTypeBondCalculation
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'BondCalculation'
	 */
	public function getAttributeName()
	{
		return 'BondCalculation';
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