<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeArrayOfExpiration
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeArrayOfExpiration
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeArrayOfExpiration extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The Expiration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalrealtimeoptionsTypeExpiration
	 */
	public $Expiration;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeExpiration Expiration
	 * @return XiGlobalrealtimeoptionsTypeArrayOfExpiration
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
	 * @return XiGlobalrealtimeoptionsTypeExpiration
	 */
	public function getExpiration()
	{
		return $this->Expiration;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalrealtimeoptionsWsdlClass::current()
	 * @return XiGlobalrealtimeoptionsTypeExpiration
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalrealtimeoptionsWsdlClass::item()
	 * @param int
	 * @return XiGlobalrealtimeoptionsTypeExpiration
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeoptionsWsdlClass::first()
	 * @return XiGlobalrealtimeoptionsTypeExpiration
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeoptionsWsdlClass::last()
	 * @return XiGlobalrealtimeoptionsTypeExpiration
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeoptionsWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalrealtimeoptionsTypeExpiration
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