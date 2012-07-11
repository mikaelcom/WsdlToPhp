<?php
/**
 * Class file for XiGlobaloptionsTypeArrayOfExpiration
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeArrayOfExpiration
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeArrayOfExpiration extends XiGlobaloptionsWsdlClass
{
	/**
	 * The Expiration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobaloptionsTypeExpiration
	 */
	public $Expiration;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeExpiration Expiration
	 * @return XiGlobaloptionsTypeArrayOfExpiration
	 */
	public function __construct($_Expiration = null)
	{
		parent::__construct(array('Expiration'=>$_Expiration));
	}
	/**
	 * Set Expiration
	 * @param Expiration Expiration
	 * @return Expiration
	 */
	public function setExpiration($_Expiration)
	{
		return ($this->Expiration = $_Expiration);
	}
	/**
	 * Get Expiration
	 * @return XiGlobaloptionsTypeExpiration
	 */
	public function getExpiration()
	{
		return $this->Expiration;
	}
	/**
	 * Returns the current element
	 * @see XiGlobaloptionsWsdlClass::current()
	 * @return XiGlobaloptionsTypeExpiration
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobaloptionsWsdlClass::item()
	 * @param int
	 * @return XiGlobaloptionsTypeExpiration
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobaloptionsWsdlClass::first()
	 * @return XiGlobaloptionsTypeExpiration
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobaloptionsWsdlClass::last()
	 * @return XiGlobaloptionsTypeExpiration
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobaloptionsWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobaloptionsTypeExpiration
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Expiration'
	 */
	public function getAttributeName()
	{
		return 'Expiration';
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