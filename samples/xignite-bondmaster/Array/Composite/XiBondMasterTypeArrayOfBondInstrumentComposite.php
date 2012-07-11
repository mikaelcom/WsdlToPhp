<?php
/**
 * Class file for XiBondMasterTypeArrayOfBondInstrumentComposite
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeArrayOfBondInstrumentComposite
 * @date 08/07/2012
 */
class XiBondMasterTypeArrayOfBondInstrumentComposite extends XiBondMasterWsdlClass
{
	/**
	 * The BondInstrumentComposite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondMasterTypeBondInstrumentComposite
	 */
	public $BondInstrumentComposite;
	/**
	 * Constructor
	 * @param XiBondMasterTypeBondInstrumentComposite BondInstrumentComposite
	 * @return XiBondMasterTypeArrayOfBondInstrumentComposite
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
	 * @return XiBondMasterTypeBondInstrumentComposite
	 */
	public function getBondInstrumentComposite()
	{
		return $this->BondInstrumentComposite;
	}
	/**
	 * Returns the current element
	 * @see XiBondMasterWsdlClass::current()
	 * @return XiBondMasterTypeBondInstrumentComposite
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondMasterWsdlClass::item()
	 * @param int
	 * @return XiBondMasterTypeBondInstrumentComposite
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::first()
	 * @return XiBondMasterTypeBondInstrumentComposite
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::last()
	 * @return XiBondMasterTypeBondInstrumentComposite
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondMasterTypeBondInstrumentComposite
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