<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeArrayOfExtendedExpiration
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeArrayOfExtendedExpiration
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeArrayOfExtendedExpiration extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The ExtendedExpiration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalrealtimeoptionsTypeExtendedExpiration
	 */
	public $ExtendedExpiration;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeExtendedExpiration ExtendedExpiration
	 * @return XiGlobalrealtimeoptionsTypeArrayOfExtendedExpiration
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
	 * @return XiGlobalrealtimeoptionsTypeExtendedExpiration
	 */
	public function getExtendedExpiration()
	{
		return $this->ExtendedExpiration;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalrealtimeoptionsWsdlClass::current()
	 * @return XiGlobalrealtimeoptionsTypeExtendedExpiration
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalrealtimeoptionsWsdlClass::item()
	 * @param int
	 * @return XiGlobalrealtimeoptionsTypeExtendedExpiration
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeoptionsWsdlClass::first()
	 * @return XiGlobalrealtimeoptionsTypeExtendedExpiration
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeoptionsWsdlClass::last()
	 * @return XiGlobalrealtimeoptionsTypeExtendedExpiration
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeoptionsWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalrealtimeoptionsTypeExtendedExpiration
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