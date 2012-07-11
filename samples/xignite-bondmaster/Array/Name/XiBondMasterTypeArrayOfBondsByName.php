<?php
/**
 * Class file for XiBondMasterTypeArrayOfBondsByName
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeArrayOfBondsByName
 * @date 08/07/2012
 */
class XiBondMasterTypeArrayOfBondsByName extends XiBondMasterWsdlClass
{
	/**
	 * The BondsByName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondMasterTypeBondsByName
	 */
	public $BondsByName;
	/**
	 * Constructor
	 * @param XiBondMasterTypeBondsByName BondsByName
	 * @return XiBondMasterTypeArrayOfBondsByName
	 */
	public function __construct($_BondsByName = null)
	{
		parent::__construct(array('BondsByName'=>$_BondsByName));
	}
	/**
	 * Set BondsByName
	 * @param BondsByName BondsByName
	 * @return BondsByName
	 */
	public function setBondsByName($_BondsByName)
	{
		return ($this->BondsByName = $_BondsByName);
	}
	/**
	 * Get BondsByName
	 * @return XiBondMasterTypeBondsByName
	 */
	public function getBondsByName()
	{
		return $this->BondsByName;
	}
	/**
	 * Returns the current element
	 * @see XiBondMasterWsdlClass::current()
	 * @return XiBondMasterTypeBondsByName
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondMasterWsdlClass::item()
	 * @param int
	 * @return XiBondMasterTypeBondsByName
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::first()
	 * @return XiBondMasterTypeBondsByName
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::last()
	 * @return XiBondMasterTypeBondsByName
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondMasterTypeBondsByName
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'BondsByName'
	 */
	public function getAttributeName()
	{
		return 'BondsByName';
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