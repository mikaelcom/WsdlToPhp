<?php
/**
 * Class file for XiBondMasterTypeArrayOfCapitalStructure
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeArrayOfCapitalStructure
 * @date 08/07/2012
 */
class XiBondMasterTypeArrayOfCapitalStructure extends XiBondMasterWsdlClass
{
	/**
	 * The CapitalStructure
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondMasterTypeCapitalStructure
	 */
	public $CapitalStructure;
	/**
	 * Constructor
	 * @param XiBondMasterTypeCapitalStructure CapitalStructure
	 * @return XiBondMasterTypeArrayOfCapitalStructure
	 */
	public function __construct($_CapitalStructure = null)
	{
		parent::__construct(array('CapitalStructure'=>$_CapitalStructure));
	}
	/**
	 * Set CapitalStructure
	 * @param CapitalStructure CapitalStructure
	 * @return CapitalStructure
	 */
	public function setCapitalStructure($_CapitalStructure)
	{
		return ($this->CapitalStructure = $_CapitalStructure);
	}
	/**
	 * Get CapitalStructure
	 * @return XiBondMasterTypeCapitalStructure
	 */
	public function getCapitalStructure()
	{
		return $this->CapitalStructure;
	}
	/**
	 * Returns the current element
	 * @see XiBondMasterWsdlClass::current()
	 * @return XiBondMasterTypeCapitalStructure
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondMasterWsdlClass::item()
	 * @param int
	 * @return XiBondMasterTypeCapitalStructure
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::first()
	 * @return XiBondMasterTypeCapitalStructure
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::last()
	 * @return XiBondMasterTypeCapitalStructure
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondMasterTypeCapitalStructure
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CapitalStructure'
	 */
	public function getAttributeName()
	{
		return 'CapitalStructure';
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