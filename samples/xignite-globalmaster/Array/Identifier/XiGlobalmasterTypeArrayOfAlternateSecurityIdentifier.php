<?php
/**
 * Class file for XiGlobalmasterTypeArrayOfAlternateSecurityIdentifier
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeArrayOfAlternateSecurityIdentifier
 * @date 08/07/2012
 */
class XiGlobalmasterTypeArrayOfAlternateSecurityIdentifier extends XiGlobalmasterWsdlClass
{
	/**
	 * The AlternateSecurityIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalmasterTypeAlternateSecurityIdentifier
	 */
	public $AlternateSecurityIdentifier;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeAlternateSecurityIdentifier AlternateSecurityIdentifier
	 * @return XiGlobalmasterTypeArrayOfAlternateSecurityIdentifier
	 */
	public function __construct($_AlternateSecurityIdentifier = null)
	{
		parent::__construct(array('AlternateSecurityIdentifier'=>$_AlternateSecurityIdentifier));
	}
	/**
	 * Set AlternateSecurityIdentifier
	 * @param AlternateSecurityIdentifier AlternateSecurityIdentifier
	 * @return AlternateSecurityIdentifier
	 */
	public function setAlternateSecurityIdentifier($_AlternateSecurityIdentifier)
	{
		return ($this->AlternateSecurityIdentifier = $_AlternateSecurityIdentifier);
	}
	/**
	 * Get AlternateSecurityIdentifier
	 * @return XiGlobalmasterTypeAlternateSecurityIdentifier
	 */
	public function getAlternateSecurityIdentifier()
	{
		return $this->AlternateSecurityIdentifier;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalmasterWsdlClass::current()
	 * @return XiGlobalmasterTypeAlternateSecurityIdentifier
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalmasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalmasterTypeAlternateSecurityIdentifier
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::first()
	 * @return XiGlobalmasterTypeAlternateSecurityIdentifier
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::last()
	 * @return XiGlobalmasterTypeAlternateSecurityIdentifier
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalmasterTypeAlternateSecurityIdentifier
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'AlternateSecurityIdentifier'
	 */
	public function getAttributeName()
	{
		return 'AlternateSecurityIdentifier';
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