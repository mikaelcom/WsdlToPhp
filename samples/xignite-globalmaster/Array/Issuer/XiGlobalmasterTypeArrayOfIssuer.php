<?php
/**
 * Class file for XiGlobalmasterTypeArrayOfIssuer
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeArrayOfIssuer
 * @date 08/07/2012
 */
class XiGlobalmasterTypeArrayOfIssuer extends XiGlobalmasterWsdlClass
{
	/**
	 * The Issuer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalmasterTypeIssuer
	 */
	public $Issuer;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeIssuer Issuer
	 * @return XiGlobalmasterTypeArrayOfIssuer
	 */
	public function __construct($_Issuer = null)
	{
		parent::__construct(array('Issuer'=>$_Issuer));
	}
	/**
	 * Set Issuer
	 * @param Issuer Issuer
	 * @return Issuer
	 */
	public function setIssuer($_Issuer)
	{
		return ($this->Issuer = $_Issuer);
	}
	/**
	 * Get Issuer
	 * @return XiGlobalmasterTypeIssuer
	 */
	public function getIssuer()
	{
		return $this->Issuer;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalmasterWsdlClass::current()
	 * @return XiGlobalmasterTypeIssuer
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalmasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalmasterTypeIssuer
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::first()
	 * @return XiGlobalmasterTypeIssuer
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::last()
	 * @return XiGlobalmasterTypeIssuer
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalmasterTypeIssuer
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Issuer'
	 */
	public function getAttributeName()
	{
		return 'Issuer';
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