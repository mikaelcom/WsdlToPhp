<?php
/**
 * Class file for XiBondMasterTypeArrayOfBondsByIssuer
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeArrayOfBondsByIssuer
 * @date 08/07/2012
 */
class XiBondMasterTypeArrayOfBondsByIssuer extends XiBondMasterWsdlClass
{
	/**
	 * The BondsByIssuer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondMasterTypeBondsByIssuer
	 */
	public $BondsByIssuer;
	/**
	 * Constructor
	 * @param XiBondMasterTypeBondsByIssuer BondsByIssuer
	 * @return XiBondMasterTypeArrayOfBondsByIssuer
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
	 * @return XiBondMasterTypeBondsByIssuer
	 */
	public function getBondsByIssuer()
	{
		return $this->BondsByIssuer;
	}
	/**
	 * Returns the current element
	 * @see XiBondMasterWsdlClass::current()
	 * @return XiBondMasterTypeBondsByIssuer
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondMasterWsdlClass::item()
	 * @param int
	 * @return XiBondMasterTypeBondsByIssuer
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::first()
	 * @return XiBondMasterTypeBondsByIssuer
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::last()
	 * @return XiBondMasterTypeBondsByIssuer
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondMasterTypeBondsByIssuer
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