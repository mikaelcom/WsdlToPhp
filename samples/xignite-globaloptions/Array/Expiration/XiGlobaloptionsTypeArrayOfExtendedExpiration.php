<?php
/**
 * Class file for XiGlobaloptionsTypeArrayOfExtendedExpiration
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeArrayOfExtendedExpiration
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeArrayOfExtendedExpiration extends XiGlobaloptionsWsdlClass
{
	/**
	 * The ExtendedExpiration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobaloptionsTypeExtendedExpiration
	 */
	public $ExtendedExpiration;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeExtendedExpiration ExtendedExpiration
	 * @return XiGlobaloptionsTypeArrayOfExtendedExpiration
	 */
	public function __construct($_ExtendedExpiration = null)
	{
		parent::__construct(array('ExtendedExpiration'=>$_ExtendedExpiration));
	}
	/**
	 * Set ExtendedExpiration
	 * @param ExtendedExpiration ExtendedExpiration
	 * @return ExtendedExpiration
	 */
	public function setExtendedExpiration($_ExtendedExpiration)
	{
		return ($this->ExtendedExpiration = $_ExtendedExpiration);
	}
	/**
	 * Get ExtendedExpiration
	 * @return XiGlobaloptionsTypeExtendedExpiration
	 */
	public function getExtendedExpiration()
	{
		return $this->ExtendedExpiration;
	}
	/**
	 * Returns the current element
	 * @see XiGlobaloptionsWsdlClass::current()
	 * @return XiGlobaloptionsTypeExtendedExpiration
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobaloptionsWsdlClass::item()
	 * @param int
	 * @return XiGlobaloptionsTypeExtendedExpiration
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobaloptionsWsdlClass::first()
	 * @return XiGlobaloptionsTypeExtendedExpiration
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobaloptionsWsdlClass::last()
	 * @return XiGlobaloptionsTypeExtendedExpiration
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobaloptionsWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobaloptionsTypeExtendedExpiration
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ExtendedExpiration'
	 */
	public function getAttributeName()
	{
		return 'ExtendedExpiration';
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