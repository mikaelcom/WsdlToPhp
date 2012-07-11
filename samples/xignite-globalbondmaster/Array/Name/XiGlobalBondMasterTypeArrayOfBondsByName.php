<?php
/**
 * Class file for XiGlobalBondMasterTypeArrayOfBondsByName
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeArrayOfBondsByName
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeArrayOfBondsByName extends XiGlobalBondMasterWsdlClass
{
	/**
	 * The BondsByName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalBondMasterTypeBondsByName
	 */
	public $BondsByName;
	/**
	 * Constructor
	 * @param XiGlobalBondMasterTypeBondsByName BondsByName
	 * @return XiGlobalBondMasterTypeArrayOfBondsByName
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
	 * @return XiGlobalBondMasterTypeBondsByName
	 */
	public function getBondsByName()
	{
		return $this->BondsByName;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalBondMasterWsdlClass::current()
	 * @return XiGlobalBondMasterTypeBondsByName
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalBondMasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalBondMasterTypeBondsByName
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::first()
	 * @return XiGlobalBondMasterTypeBondsByName
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::last()
	 * @return XiGlobalBondMasterTypeBondsByName
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalBondMasterTypeBondsByName
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