<?php
/**
 * Class file for XiGlobalBondMasterTypeArrayOfBondsByIssuer
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeArrayOfBondsByIssuer
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeArrayOfBondsByIssuer extends XiGlobalBondMasterWsdlClass
{
	/**
	 * The BondsByIssuer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalBondMasterTypeBondsByIssuer
	 */
	public $BondsByIssuer;
	/**
	 * Constructor
	 * @param XiGlobalBondMasterTypeBondsByIssuer BondsByIssuer
	 * @return XiGlobalBondMasterTypeArrayOfBondsByIssuer
	 */
	public function __construct($_BondsByIssuer = null)
	{
		parent::__construct(array('BondsByIssuer'=>$_BondsByIssuer));
	}
	/**
	 * Set BondsByIssuer
	 * @param BondsByIssuer BondsByIssuer
	 * @return BondsByIssuer
	 */
	public function setBondsByIssuer($_BondsByIssuer)
	{
		return ($this->BondsByIssuer = $_BondsByIssuer);
	}
	/**
	 * Get BondsByIssuer
	 * @return XiGlobalBondMasterTypeBondsByIssuer
	 */
	public function getBondsByIssuer()
	{
		return $this->BondsByIssuer;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalBondMasterWsdlClass::current()
	 * @return XiGlobalBondMasterTypeBondsByIssuer
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalBondMasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalBondMasterTypeBondsByIssuer
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::first()
	 * @return XiGlobalBondMasterTypeBondsByIssuer
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::last()
	 * @return XiGlobalBondMasterTypeBondsByIssuer
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalBondMasterTypeBondsByIssuer
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'BondsByIssuer'
	 */
	public function getAttributeName()
	{
		return 'BondsByIssuer';
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