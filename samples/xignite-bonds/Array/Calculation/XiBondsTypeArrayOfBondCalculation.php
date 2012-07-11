<?php
/**
 * Class file for XiBondsTypeArrayOfBondCalculation
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeArrayOfBondCalculation
 * @date 08/07/2012
 */
class XiBondsTypeArrayOfBondCalculation extends XiBondsWsdlClass
{
	/**
	 * The BondCalculation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondsTypeBondCalculation
	 */
	public $BondCalculation;
	/**
	 * Constructor
	 * @param XiBondsTypeBondCalculation BondCalculation
	 * @return XiBondsTypeArrayOfBondCalculation
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
	 * @return XiBondsTypeBondCalculation
	 */
	public function getBondCalculation()
	{
		return $this->BondCalculation;
	}
	/**
	 * Returns the current element
	 * @see XiBondsWsdlClass::current()
	 * @return XiBondsTypeBondCalculation
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondsWsdlClass::item()
	 * @param int
	 * @return XiBondsTypeBondCalculation
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::first()
	 * @return XiBondsTypeBondCalculation
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::last()
	 * @return XiBondsTypeBondCalculation
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondsWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondsTypeBondCalculation
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