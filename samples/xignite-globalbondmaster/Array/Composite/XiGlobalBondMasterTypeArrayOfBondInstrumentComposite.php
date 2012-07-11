<?php
/**
 * Class file for XiGlobalBondMasterTypeArrayOfBondInstrumentComposite
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeArrayOfBondInstrumentComposite
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeArrayOfBondInstrumentComposite extends XiGlobalBondMasterWsdlClass
{
	/**
	 * The BondInstrumentComposite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalBondMasterTypeBondInstrumentComposite
	 */
	public $BondInstrumentComposite;
	/**
	 * Constructor
	 * @param XiGlobalBondMasterTypeBondInstrumentComposite BondInstrumentComposite
	 * @return XiGlobalBondMasterTypeArrayOfBondInstrumentComposite
	 */
	public function __construct($_BondInstrumentComposite = null)
	{
		parent::__construct(array('BondInstrumentComposite'=>$_BondInstrumentComposite));
	}
	/**
	 * Set BondInstrumentComposite
	 * @param BondInstrumentComposite BondInstrumentComposite
	 * @return BondInstrumentComposite
	 */
	public function setBondInstrumentComposite($_BondInstrumentComposite)
	{
		return ($this->BondInstrumentComposite = $_BondInstrumentComposite);
	}
	/**
	 * Get BondInstrumentComposite
	 * @return XiGlobalBondMasterTypeBondInstrumentComposite
	 */
	public function getBondInstrumentComposite()
	{
		return $this->BondInstrumentComposite;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalBondMasterWsdlClass::current()
	 * @return XiGlobalBondMasterTypeBondInstrumentComposite
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalBondMasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalBondMasterTypeBondInstrumentComposite
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::first()
	 * @return XiGlobalBondMasterTypeBondInstrumentComposite
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::last()
	 * @return XiGlobalBondMasterTypeBondInstrumentComposite
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalBondMasterTypeBondInstrumentComposite
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'BondInstrumentComposite'
	 */
	public function getAttributeName()
	{
		return 'BondInstrumentComposite';
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